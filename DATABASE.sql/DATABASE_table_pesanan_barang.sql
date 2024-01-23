
-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_barang`
--

CREATE TABLE `pesanan_barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_barang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_wa` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pembayaran` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan_barang`
--

INSERT INTO `pesanan_barang` (`id_barang`, `nama`, `nama_barang`, `alamat`, `email`, `no_wa`, `pembayaran`) VALUES
(10, 'ibnu', 'speaker', 'jatimulyo', 'ibnurasyid6703@gmail.com', '087263512761', 'TRANSFER'),
(16, 'WAWAN', 'speaker', 'btg serangan', 'wawan@gmail.com', '0876312618218', 'TRANSFER'),
(18, 'ibnu rasyid', 'sarung jempol', 'jatim mulyo', 'ibnurasyid6703@gmail.com', '089875632112', 'COD'),
(19, 'dika', 'kabel charger', 'binjai', 'dika3@gmail.com', '089657432341', 'COD');
