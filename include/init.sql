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
