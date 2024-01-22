-- Create Categories Table
CREATE TABLE categories (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

-- Create Products Table
CREATE TABLE products (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    category_id INT REFERENCES categories(id) ON DELETE CASCADE
);

INSERT INTO categories (name) VALUES
('Boomschors'),
('Dierenspeciaalzaak'),
('Duiven'),
('Graszaden'),
('Honden_en_katten'),
('Houtpellets'),
('Kleine_hoefdieren'),
('Laarzen_en_Jollys'),
('Meststoffen'),
('Neerhofdieren'),
('Paarden'),
('Planten'),
('Potgrond'),
('Rundvee'),
('Sproeistoffen'),
('Stalstrooisel'),
('Tuingereedschap'),
('Vogels'),
('Weide_afsluiting'),
('Zaden_en_planten');



CREATE TABLE users (
                       id SERIAL PRIMARY KEY,
                       username VARCHAR(255) UNIQUE NOT NULL,
                       password VARCHAR(255) NOT NULL
);



INSERT INTO users (username, password) VALUES ('admin', '$2y$10$CX6QkDPESMY.Z5flZumCZOVcB4a2xS2iMbUtIpG9oke25r7JHhVmC');





-- Create Categories Table
CREATE TABLE categories (
                            id SERIAL PRIMARY KEY,
                            name VARCHAR(255) NOT NULL,
                            image_path VARCHAR(255) NOT NULL
);

-- Insert data into Categories Table
INSERT INTO categories (name, image_path) VALUES
                                              ('Rundvee', 'images/Diensten/cows-producing-milk-gruyere-cheese-france-spring.jpg'),
                                              ('Paarden', 'images/Diensten/horse-alezan-brown-ride-mane.jpg'),
                                              ('Kleine hoefdieren', 'images/Diensten/sheep.jpg'),
                                              ('Stalstrooisel', 'images/Diensten/hay-bedding.jpg'),
                                              ('Neerhofdieren', 'images/Diensten/chicken-walking-middle-field.jpg'),
                                              ('Honden en katten', 'images/Diensten/cat-dog-lie-together-floor.jpg'),
                                              ('Duiven', 'images/Diensten/two-piggeons-sitting-stone-fence-park.jpg'),
                                              ('Vogels', 'images/Diensten/olivebacked-sunbirds-feeding-child.jpg'),
                                              ('Meststoffen', 'images/Diensten/applying-fertilizer-big-green-beautiful-bush-flowers-before-bloom.jpg'),
                                              ('Potgrond', 'images/Diensten/hand-holding-peat-moss-organic-matter-improve-soil-agriculture-organic-plant-growing-ecology-concept.jpg'),
                                              ('Boomschors', 'images/Diensten/beautiful-macro-wood-concept.jpg'),
                                              ('Graszaden', 'images/Diensten/wheat-grain-female-hand-green-grass-background.jpg'),
                                              ('Sproeistoffen', 'images/Diensten/farmer-spraying-vegetables-garden-with-herbicides-man-black-apron.jpg'),
                                              ('Tuingereedschap', 'images/Diensten/row-gardening-tools-soil-background.jpg'),
                                              ('Zaden en planten', 'images/Diensten/close-up-picture-hand-holding-planting-seed-plant.jpg'),
                                              ('Laarzen en Jolly''s', 'images/Diensten/close-up-gardening-accesories.jpg'),
                                              ('Weide afsluiting', 'images/Diensten/wooden-fence.jpg'),
                                              ('Antargaz', 'images/Diensten/man-holding-bottle-butane-gas-red-background.jpg'),
                                              ('Houtpellets', 'images/Diensten/eco-fuel-wooden-pellets-with-firewood.jpg');

-- Create Products Table
CREATE TABLE products (
                          id SERIAL PRIMARY KEY,
                          name VARCHAR(255) NOT NULL,
                          description TEXT,
                          price DECIMAL(10, 2) NOT NULL,
                          category_id INT REFERENCES categories(id) ON DELETE CASCADE
);

-- Insert data into Products Table if needed
-- Modify this part based on your specific product data








--
-- ==================UPDATE==================
--
--

-- Create Main Categories Table
CREATE TABLE main_category (
                               id SERIAL PRIMARY KEY,
                               name VARCHAR(255) NOT NULL
);

-- Insert data into Main Categories Table
INSERT INTO main_category (name) VALUES
                                     ('Dieren'),
                                     ('Huis en Tuin');

-- Create Categories Table
CREATE TABLE categories (
                            id SERIAL PRIMARY KEY,
                            name VARCHAR(255) NOT NULL,
                            image_path VARCHAR(255) NOT NULL,
                            main_category_id INT REFERENCES main_category(id) ON DELETE CASCADE
);

-- Insert data into Categories Table
INSERT INTO categories (name, image_path, main_category_id) VALUES
                                                                ('Rundvee', 'images/Diensten/cows-producing-milk-gruyere-cheese-france-spring.jpg', 1),
                                                                ('Paarden', 'images/Diensten/horse-alezan-brown-ride-mane.jpg', 1),
                                                                ('Kleine hoefdieren', 'images/Diensten/sheep.jpg', 1),
                                                                ('Stalstrooisel', 'images/Diensten/hay-bedding.jpg', 1),
                                                                ('Neerhofdieren', 'images/Diensten/chicken-walking-middle-field.jpg', 1),
                                                                ('Honden en katten', 'images/Diensten/cat-dog-lie-together-floor.jpg', 1),
                                                                ('Duiven', 'images/Diensten/two-piggeons-sitting-stone-fence-park.jpg', 1),
                                                                ('Vogels', 'images/Diensten/olivebacked-sunbirds-feeding-child.jpg', 1),
                                                                ('Meststoffen', 'images/Diensten/applying-fertilizer-big-green-beautiful-bush-flowers-before-bloom.jpg', 2),
                                                                ('Potgrond', 'images/Diensten/hand-holding-peat-moss-organic-matter-improve-soil-agriculture-organic-plant-growing-ecology-concept.jpg', 2),
                                                                ('Boomschors', 'images/Diensten/beautiful-macro-wood-concept.jpg', 2),
                                                                ('Graszaden', 'images/Diensten/wheat-grain-female-hand-green-grass-background.jpg', 2),
                                                                ('Sproeistoffen', 'images/Diensten/farmer-spraying-vegetables-garden-with-herbicides-man-black-apron.jpg', 2),
                                                                ('Tuingereedschap', 'images/Diensten/row-gardening-tools-soil-background.jpg', 2),
                                                                ('Zaden en planten', 'images/Diensten/close-up-picture-hand-holding-planting-seed-plant.jpg', 2),
                                                                ('Laarzen en Jolly''s', 'images/Diensten/close-up-gardening-accesories.jpg', 2),
                                                                ('Weide afsluiting', 'images/Diensten/wooden-fence.jpg', 2),
                                                                ('Antargaz', 'images/Diensten/man-holding-bottle-butane-gas-red-background.jpg', 2),
                                                                ('Houtpellets', 'images/Diensten/eco-fuel-wooden-pellets-with-firewood.jpg', 2);





-- ========================================================================================================================





-- Create Main Categories Table
CREATE TABLE main_category (
                               id SERIAL PRIMARY KEY,
                               name VARCHAR(255) NOT NULL
);

-- Insert data into Main Categories Table
INSERT INTO main_category (name) VALUES
                                     ('Dieren'),
                                     ('Huis en Tuin');

-- Create Categories Table
CREATE TABLE categories (
                            id SERIAL PRIMARY KEY,
                            name VARCHAR(255) NOT NULL,
                            image_path VARCHAR(255) NOT NULL,
                            order_column INT DEFAULT 0,
                            archived BOOLEAN DEFAULT false,
                            main_category_id INT REFERENCES main_category(id) ON DELETE CASCADE,
                            created_at TIMESTAMP DEFAULT current_timestamp,
                            updated_at TIMESTAMP DEFAULT current_timestamp
);

-- Insert data into Categories Table
INSERT INTO categories (name, image_path, order_column, archived, main_category_id)
VALUES
    ('Rundvee', 'images/Diensten/cows-producing-milk-gruyere-cheese-france-spring.jpg', 1, false, 1),
    ('Paarden', 'images/Diensten/horse-alezan-brown-ride-mane.jpg', 2, false, 1),
    ('Kleine hoefdieren', 'images/Diensten/sheep.jpg', 3, false, 1),
    ('Stalstrooisel', 'images/Diensten/hay-bedding.jpg', 4, false, 1),
    ('Neerhofdieren', 'images/Diensten/chicken-walking-middle-field.jpg', 5, false, 1),
    ('Honden en katten', 'images/Diensten/cat-dog-lie-together-floor.jpg', 6, false, 1),
    ('Duiven', 'images/Diensten/two-piggeons-sitting-stone-fence-park.jpg', 7, false, 1),
    ('Vogels', 'images/Diensten/olivebacked-sunbirds-feeding-child.jpg', 8, false, 1),
    ('Meststoffen', 'images/Diensten/applying-fertilizer-big-green-beautiful-bush-flowers-before-bloom.jpg', 1, false, 2),
    ('Potgrond', 'images/Diensten/hand-holding-peat-moss-organic-matter-improve-soil-agriculture-organic-plant-growing-ecology-concept.jpg', 2, false, 2),
    ('Boomschors', 'images/Diensten/beautiful-macro-wood-concept.jpg', 3, false, 2),
    ('Graszaden', 'images/Diensten/wheat-grain-female-hand-green-grass-background.jpg', 4, false, 2),
    ('Sproeistoffen', 'images/Diensten/farmer-spraying-vegetables-garden-with-herbicides-man-black-apron.jpg', 5, false, 2),
    ('Tuingereedschap', 'images/Diensten/row-gardening-tools-soil-background.jpg', 6, false, 2),
    ('Zaden en planten', 'images/Diensten/close-up-picture-hand-holding-planting-seed-plant.jpg', 7, false, 2),
    ('Laarzen en Jolly''s', 'images/Diensten/close-up-gardening-accesories.jpg', 8, false, 2),
    ('Weide afsluiting', 'images/Diensten/wooden-fence.jpg', 9, false, 2),
    ('Antargaz', 'images/Diensten/man-holding-bottle-butane-gas-red-background.jpg', 10, false, 2),
    ('Houtpellets', 'images/Diensten/eco-fuel-wooden-pellets-with-firewood.jpg', 11, false, 2);








-- =============================new update=============================

CREATE TABLE IF NOT EXISTS public.page_content
(
    id serial PRIMARY KEY,
    category_id integer REFERENCES public.categories(id),
    title character varying(255) NOT NULL,
    content text,
    image_path character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS public.products
(
    id serial PRIMARY KEY,
    category_id integer REFERENCES public.categories(id),
    name character varying(255) NOT NULL,
    weight numeric,
    price numeric,
    description text,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);








-- huidge db POSTGRESS ============================================================================





CREATE TABLE users (
                       id SERIAL PRIMARY KEY,
                       username VARCHAR(255) UNIQUE NOT NULL,
                       password VARCHAR(255) NOT NULL
);



INSERT INTO users (username, password) VALUES ('admin', '$2y$10$CX6QkDPESMY.Z5flZumCZOVcB4a2xS2iMbUtIpG9oke25r7JHhVmC');







-- Create Main Categories Table
CREATE TABLE main_category (
                               id SERIAL PRIMARY KEY,
                               name VARCHAR(255) NOT NULL
);

-- Insert data into Main Categories Table
INSERT INTO main_category (name) VALUES
                                     ('Dieren'),
                                     ('Huis en Tuin');





-- Create Categories Table
CREATE TABLE categories (
                            id SERIAL PRIMARY KEY,
                            name VARCHAR(255) NOT NULL,
                            image_path VARCHAR(255) NOT NULL,
                            order_column INT DEFAULT 0,
                            archived BOOLEAN DEFAULT false,
                            main_category_id INT REFERENCES main_category(id) ON DELETE CASCADE,
                            created_at TIMESTAMP DEFAULT current_timestamp,
                            updated_at TIMESTAMP DEFAULT current_timestamp
);

-- Insert data into Categories Table
INSERT INTO categories (name, image_path, order_column, archived, main_category_id)
VALUES
    ('Rundvee', 'images/Diensten/cows-producing-milk-gruyere-cheese-france-spring.jpg', 1, false, 1),
    ('Paarden', 'images/Diensten/horse-alezan-brown-ride-mane.jpg', 2, false, 1),
    ('Kleine hoefdieren', 'images/Diensten/sheep.jpg', 3, false, 1),
    ('Stalstrooisel', 'images/Diensten/hay-bedding.jpg', 4, false, 1),
    ('Neerhofdieren', 'images/Diensten/chicken-walking-middle-field.jpg', 5, false, 1),
    ('Honden en katten', 'images/Diensten/cat-dog-lie-together-floor.jpg', 6, false, 1),
    ('Duiven', 'images/Diensten/two-piggeons-sitting-stone-fence-park.jpg', 7, false, 1),
    ('Vogels', 'images/Diensten/olivebacked-sunbirds-feeding-child.jpg', 8, false, 1),
    ('Meststoffen', 'images/Diensten/applying-fertilizer-big-green-beautiful-bush-flowers-before-bloom.jpg', 1, false, 2),
    ('Potgrond', 'images/Diensten/hand-holding-peat-moss-organic-matter-improve-soil-agriculture-organic-plant-growing-ecology-concept.jpg', 2, false, 2),
    ('Boomschors', 'images/Diensten/beautiful-macro-wood-concept.jpg', 3, false, 2),
    ('Graszaden', 'images/Diensten/wheat-grain-female-hand-green-grass-background.jpg', 4, false, 2),
    ('Sproeistoffen', 'images/Diensten/farmer-spraying-vegetables-garden-with-herbicides-man-black-apron.jpg', 5, false, 2),
    ('Tuingereedschap', 'images/Diensten/row-gardening-tools-soil-background.jpg', 6, false, 2),
    ('Zaden en planten', 'images/Diensten/close-up-picture-hand-holding-planting-seed-plant.jpg', 7, false, 2),
    ('Laarzen en Jolly''s', 'images/Diensten/close-up-gardening-accesories.jpg', 8, false, 2),
    ('Weide afsluiting', 'images/Diensten/wooden-fence.jpg', 9, false, 2),
    ('Antargaz', 'images/Diensten/man-holding-bottle-butane-gas-red-background.jpg', 10, false, 2),
    ('Houtpellets', 'images/Diensten/eco-fuel-wooden-pellets-with-firewood.jpg', 11, false, 2);









CREATE TABLE IF NOT EXISTS public.page_content
(
    id serial PRIMARY KEY,
    category_id integer REFERENCES public.categories(id),
    title character varying(255) NOT NULL,
    content text,
    image_path character varying(255),
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS public.products
(
    id serial PRIMARY KEY,
    category_id integer REFERENCES public.categories(id),
    name character varying(255) NOT NULL,
    weight numeric,
    price numeric,
    description text,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);









--======================MYSQL==========================



-- Create Users Table
CREATE TABLE IF NOT EXISTS users (
                                     id SERIAL PRIMARY KEY,
                                     username VARCHAR(255) UNIQUE NOT NULL,
                                     password VARCHAR(255) NOT NULL
);

-- Insert data into Users Table
INSERT INTO users (username, password) VALUES ('admin', '$2y$10$CX6QkDPESMY.Z5flZumCZOVcB4a2xS2iMbUtIpG9oke25r7JHhVmC');

-- Create Main Categories Table
CREATE TABLE IF NOT EXISTS main_category (
                                             id SERIAL PRIMARY KEY,
                                             name VARCHAR(255) NOT NULL
);

-- Insert data into Main Categories Table
INSERT INTO main_category (name) VALUES
                                     ('Dieren'),
                                     ('Huis en Tuin');

-- Create Categories Table
CREATE TABLE IF NOT EXISTS categories (
                                          id SERIAL PRIMARY KEY,
                                          name VARCHAR(255) NOT NULL,
                                          image_path VARCHAR(255) NOT NULL,
                                          order_column INT DEFAULT 0,
                                          archived BOOLEAN DEFAULT false,
                                          main_category_id INT REFERENCES main_category(id) ON DELETE CASCADE,
                                          created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                                          updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert data into Categories Table
INSERT INTO categories (name, image_path, order_column, archived, main_category_id)
VALUES
    ('Rundvee', 'images/Diensten/cows-producing-milk-gruyere-cheese-france-spring.jpg', 1, false, 1),
    ('Paarden', 'images/Diensten/horse-alezan-brown-ride-mane.jpg', 2, false, 1),
    ('Kleine hoefdieren', 'images/Diensten/sheep.jpg', 3, false, 1),
    ('Stalstrooisel', 'images/Diensten/hay-bedding.jpg', 4, false, 1),
    ('Neerhofdieren', 'images/Diensten/chicken-walking-middle-field.jpg', 5, false, 1),
    ('Honden en katten', 'images/Diensten/cat-dog-lie-together-floor.jpg', 6, false, 1),
    ('Duiven', 'images/Diensten/two-piggeons-sitting-stone-fence-park.jpg', 7, false, 1),
    ('Vogels', 'images/Diensten/olivebacked-sunbirds-feeding-child.jpg', 8, false, 1),
    ('Meststoffen', 'images/Diensten/applying-fertilizer-big-green-beautiful-bush-flowers-before-bloom.jpg', 1, false, 2),
    ('Potgrond', 'images/Diensten/hand-holding-peat-moss-organic-matter-improve-soil-agriculture-organic-plant-growing-ecology-concept.jpg', 2, false, 2),
    ('Boomschors', 'images/Diensten/beautiful-macro-wood-concept.jpg', 3, false, 2),
    ('Graszaden', 'images/Diensten/wheat-grain-female-hand-green-grass-background.jpg', 4, false, 2),
    ('Sproeistoffen', 'images/Diensten/farmer-spraying-vegetables-garden-with-herbicides-man-black-apron.jpg', 5, false, 2),
    ('Tuingereedschap', 'images/Diensten/row-gardening-tools-soil-background.jpg', 6, false, 2),
    ('Zaden en planten', 'images/Diensten/close-up-picture-hand-holding-planting-seed-plant.jpg', 7, false, 2),
    ('Laarzen en Jolly''s', 'images/Diensten/close-up-gardening-accesories.jpg', 8, false, 2),
    ('Weide afsluiting', 'images/Diensten/wooden-fence.jpg', 9, false, 2),
    ('Antargaz', 'images/Diensten/man-holding-bottle-butane-gas-red-background.jpg', 10, false, 2),
    ('Houtpellets', 'images/Diensten/eco-fuel-wooden-pellets-with-firewood.jpg', 11, false, 2);





-- Create Page Content Table
CREATE TABLE IF NOT EXISTS page_content (
                                            id SERIAL PRIMARY KEY,
                                            category_id INTEGER REFERENCES public.categories(id),
                                            title VARCHAR(255) NOT NULL,
                                            content TEXT,
                                            image_path VARCHAR(255),
                                            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                                            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create Products Table
CREATE TABLE IF NOT EXISTS products (
                                        id SERIAL PRIMARY KEY,
                                        category_id INTEGER REFERENCES public.categories(id),
                                        name VARCHAR(255) NOT NULL,
                                        weight NUMERIC,
                                        price NUMERIC,
                                        description TEXT,
                                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                                        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
