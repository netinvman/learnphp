DROP TABLE IF EXISTS card_types;
DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS editorial_categories;
DROP TABLE IF EXISTS editorials;
DROP TABLE IF EXISTS items;
DROP TABLE IF EXISTS members;
DROP TABLE IF EXISTS orders;
CREATE TABLE card_types (
    card_type_id    int auto_increment primary key,
    name            varchar(50) NOT NULL
);
CREATE TABLE categories (
    category_id     int auto_increment primary key,
    name            varchar(50) NOT NULL
);
CREATE TABLE editorial_categories (
    editorial_cat_id    int auto_increment primary key,
    editorial_cat_name  varchar(50) NULL
);
CREATE TABLE editorials (
    article_id          int auto_increment primary key,
    editorial_cat_id    int NULL DEFAULT 0,
    article_title       varchar(200) NULL,
    article_desc        text NULL,
    item_id             int NULL DEFAULT 0
);
CREATE TABLE items (
    item_id             int auto_increment primary key,
    category_id         int NOT NULL,
    name                varchar(255) NOT NULL,
    author              varchar(100) NULL,
    price               float NOT NULL,
    product_url         varchar(255) NULL,
    image_url           varchar(255) NULL,
    notes               text NULL,
    is_recommended      tinyint NULL DEFAULT 0,
    rating              int DEFAULT 0,
    rating_count        int DEFAULT 0
);
CREATE TABLE members (
    member_id           int auto_increment primary key,
    member_login        varchar(20) NOT NULL,
    member_password     varchar(20) NOT NULL,
    member_level        int NOT NULL DEFAULT 1,
    first_name          varchar(50) NOT NULL,
    last_name           varchar(50) NOT NULL,
    email               varchar(50) NOT NULL,
    phone               varchar(50) NOT NULL,
    address             varchar(50) NOT NULL,
    notes               text NULL,
    card_type_id        int NULL,
    card_number         varchar(50) NULL
);
CREATE TABLE orders (
    order_id            int auto_increment primary key,
    member_id           int NOT NULL,
    item_id             int NOT NULL,
    quantity            int NOT NULL
);
