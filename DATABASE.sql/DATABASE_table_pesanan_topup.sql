
-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_topup`
--

CREATE TABLE `pesanan_topup` (
  `barang_id` int(11) NOT NULL,
  `game` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_player` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nickname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `topup` varchar(20) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_wa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pembayaran` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan_topup`
--

INSERT INTO `pesanan_topup` (`barang_id`, `game`, `id_player`, `nickname`, `topup`, `email`, `no_wa`, `pembayaran`) VALUES
(1, 'MOBILE LEGEND', '10932190(8700)', 'cengku', '70', 'cenky@gmail.com', '089429984239', 'GOPAY');
