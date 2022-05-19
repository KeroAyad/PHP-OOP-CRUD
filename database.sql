CREATE TABLE `products` (
  `sku` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `type` varchar(255)int(11) NOT NULL,
  `attribute` varchar(255) COLLATE utf8_bin NOT NULL
)
ALTER TABLE `products`
  ADD PRIMARY KEY (`sku`);