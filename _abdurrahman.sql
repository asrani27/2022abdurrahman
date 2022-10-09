/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50734 (5.7.34)
 Source Host           : localhost:3306
 Source Schema         : _abdurrahman

 Target Server Type    : MySQL
 Target Server Version : 50734 (5.7.34)
 File Encoding         : 65001

 Date: 09/10/2022 16:20:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bendahara
-- ----------------------------
DROP TABLE IF EXISTS `bendahara`;
CREATE TABLE `bendahara` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `agama` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of bendahara
-- ----------------------------
BEGIN;
INSERT INTO `bendahara` (`id`, `nip`, `nama`, `alamat`, `agama`, `jkel`, `tempat_lahir`, `tanggal_lahir`, `telp`, `created_at`, `updated_at`, `jabatan_id`) VALUES (5, '768090', 'udin 2', 'jl', 'islam', 'L', 'banjarmasin', '2022-10-09', '0987654', '2022-10-09 06:45:54', '2022-10-09 06:46:06', 4);
COMMIT;

-- ----------------------------
-- Table structure for biaya
-- ----------------------------
DROP TABLE IF EXISTS `biaya`;
CREATE TABLE `biaya` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `b_harian` int(11) DEFAULT NULL,
  `b_perjalanan` int(11) DEFAULT NULL,
  `b_dinas` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of biaya
-- ----------------------------
BEGIN;
INSERT INTO `biaya` (`id`, `kode`, `nama`, `jabatan_id`, `b_harian`, `b_perjalanan`, `b_dinas`, `created_at`, `updated_at`) VALUES (1, 'b001', 'lkjlk', 3, 1000, 2000, 3000, '2022-10-09 05:09:28', '2022-10-09 05:11:19');
COMMIT;

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
BEGIN;
INSERT INTO `jabatan` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES (1, '001', 'Kepala Dinas', '2022-10-09 04:02:23', '2022-10-09 07:54:22');
INSERT INTO `jabatan` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES (3, '008', 'Kabid 1', '2022-10-09 04:02:33', '2022-10-09 07:54:19');
INSERT INTO `jabatan` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES (4, '009', 'Bendahara Keuangan', '2022-10-09 06:45:30', '2022-10-09 07:54:15');
COMMIT;

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `agama` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
BEGIN;
INSERT INTO `pegawai` (`id`, `nip`, `nama`, `alamat`, `agama`, `jkel`, `tempat_lahir`, `tanggal_lahir`, `telp`, `created_at`, `updated_at`, `jabatan_id`) VALUES (3, '4567891', 'ku1', '1lhkl', 'kristen', 'L', 'lklk1', '2022-10-09', '90791', '2022-10-09 03:45:58', '2022-10-09 05:13:59', 1);
COMMIT;

-- ----------------------------
-- Table structure for pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `sppd_id` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `bendahara_id` int(11) DEFAULT NULL,
  `pegawai_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pembayaran
-- ----------------------------
BEGIN;
INSERT INTO `pembayaran` (`id`, `nomor`, `sppd_id`, `jumlah`, `bendahara_id`, `pegawai_id`, `created_at`, `updated_at`) VALUES (2, '012312', 2, 10000001, 5, 3, '2022-10-09 07:16:38', '2022-10-09 07:18:02');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
COMMIT;

-- ----------------------------
-- Table structure for sekda
-- ----------------------------
DROP TABLE IF EXISTS `sekda`;
CREATE TABLE `sekda` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `agama` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of sekda
-- ----------------------------
BEGIN;
INSERT INTO `sekda` (`id`, `nip`, `nama`, `alamat`, `agama`, `jkel`, `tempat_lahir`, `tanggal_lahir`, `telp`, `created_at`, `updated_at`, `jabatan_id`) VALUES (4, '16578', 'iuhkj2', 'kjh', 'islam', 'P', 'kjh', '2022-10-03', '45678', '2022-10-09 03:54:36', '2022-10-09 05:15:01', 3);
COMMIT;

-- ----------------------------
-- Table structure for skpd
-- ----------------------------
DROP TABLE IF EXISTS `skpd`;
CREATE TABLE `skpd` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of skpd
-- ----------------------------
BEGIN;
INSERT INTO `skpd` (`id`, `kode`, `nama`, `telp`, `created_at`, `updated_at`) VALUES (4, '001', 'Dinas Sosial', NULL, '2022-10-09 04:09:28', '2022-10-09 04:09:28');
INSERT INTO `skpd` (`id`, `kode`, `nama`, `telp`, `created_at`, `updated_at`) VALUES (5, '002', 'Dinas Pendidikan', NULL, '2022-10-09 04:09:35', '2022-10-09 04:09:35');
COMMIT;

-- ----------------------------
-- Table structure for sppd
-- ----------------------------
DROP TABLE IF EXISTS `sppd`;
CREATE TABLE `sppd` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) DEFAULT NULL,
  `spt_id` int(11) DEFAULT NULL,
  `tgl` varchar(255) DEFAULT NULL,
  `biaya_id` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sekda_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sppd
-- ----------------------------
BEGIN;
INSERT INTO `sppd` (`id`, `nomor`, `spt_id`, `tgl`, `biaya_id`, `jumlah`, `sekda_id`, `status`, `created_at`, `updated_at`) VALUES (2, '011123', 1, '2022-10-09', 1, 2, 4, 'ok', '2022-10-09 06:37:52', '2022-10-09 06:41:00');
COMMIT;

-- ----------------------------
-- Table structure for spt
-- ----------------------------
DROP TABLE IF EXISTS `spt`;
CREATE TABLE `spt` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode_spt` varchar(255) DEFAULT NULL,
  `nama_spt` varchar(255) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `kegiatan` varchar(255) DEFAULT NULL,
  `biaya_id` int(11) DEFAULT NULL,
  `skpd_id` int(11) DEFAULT NULL,
  `pegawai_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of spt
-- ----------------------------
BEGIN;
INSERT INTO `spt` (`id`, `kode_spt`, `nama_spt`, `tgl`, `tujuan`, `kegiatan`, `biaya_id`, `skpd_id`, `pegawai_id`, `created_at`, `updated_at`) VALUES (1, 'hjg', 'hjgjh', '2022-10-09', 'kj', 'hkjh', 1, 5, 3, '2022-10-09 05:49:01', '2022-10-09 05:51:34');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`) VALUES (1, 'superadmin', NULL, 'superadmin', '2022-10-09 16:15:33', '$2y$10$3k7FLC2TkBzYnumOyiv7BOmTOsTzzJHb3/p4aKcBUoGonp4Jij0Wu', NULL, 'AEAVKYSrZyZCKIKELd9Z0AScFa3DnGKmFxcLre8moijV7FFgex23pqLUHVaE', '2022-10-09 16:15:33', '2022-10-09 16:15:33', NULL, NULL, 0);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
