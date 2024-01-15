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
