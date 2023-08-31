FROM php:7.4-fpm

ARG user
ARG uid

# Set working directory
WORKDIR /var/www


# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libcurl4-openssl-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
# Install extensions

RUN docker-php-ext-install mysqli pdo_mysql exif pcntl curl
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install gd

# Установка Node.js и npm
RUN apt-get update \
    && apt-get install -y curl apt-utils\
    && curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    mkdir -p /home/$user/.npm && \
    chown -R $user:$user /home/$user

# Copy existing application directory contents
COPY . /var/www

RUN npm install
RUN npm run dev

# Change current user to $user
USER $user

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
