

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);


CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `cfdi` varchar(50) DEFAULT NULL,
  `cfdis` varchar(50) DEFAULT NULL,
  `efecto` varchar(50) DEFAULT NULL,
  `fechaexp` date DEFAULT NULL,
  `fechasat` date DEFAULT NULL,
  `foliofiscal` varchar(50) DEFAULT NULL,
  `pac` varchar(50) DEFAULT NULL,
  `rfce` varchar(50) DEFAULT NULL,
  `rfcr` varchar(50) DEFAULT NULL,
  `rsocial` varchar(50) DEFAULT NULL,
  `rsocialr` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `productos` (`id`, `cfdi`, `cfdis`, `efecto`, `fechaexp`, `fechasat`, `foliofiscal`, `pac`, `rfce`, `rfcr`, `rsocial`, `rsocialr`, `status`) VALUES
(5, '599640.05', 'VIGENTE', 'INGRESO', '2024-02-29', '2024-02-29', 'FD351C3C-2395-44FA-A39E', 'ASE0201179X0', 'PTI151101TE5', 'DDR930923BC0', 'PEMEX TRANSFORMACION', 'DISTRIBUIDORA DE DIESEL RIO PANUCO', 'VENCIDO'),
(7, 'DATO1', 'DATO1', 'DATO1', '2024-02-05', '2024-02-27', 'DATO1', 'DATO1', 'DATO1', 'DATO1', 'V', 'DATO1', 'DATO1'),
(8, 'DATO2', 'DATO2', 'DATO2', '2024-02-06', '2024-02-23', 'DATO2', 'DATO2', 'DATO2', 'DATO2', 'DATO2', 'DATO2', 'DATO2'),
(9, 'DATO3', 'DATO3', 'DATO3', '2024-02-05', '2024-02-28', 'DATO3', 'DATO3', 'DATO3', 'DATO3', 'DATO3', 'DATO3', 'DATO3'),
(10, 'DATO4', 'DATO4', 'DATO4', '2024-02-14', '2024-02-14', 'DATO4', 'DATO4', 'DATO4', 'DATO4', 'DATO4', 'DATO4', 'DATO4'),
(11, 'DATO6', 'DATO6', 'DATO6', '2024-02-12', '2024-02-26', 'DATO6', 'DATO6', 'DATO6', 'DATO6', 'DATO6', 'DATO6', 'DATO6');



CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Administrador', 'admin@admin.com', '2024-02-22 07:02:31', '$2y$12$Sl25br2cyeJbJQuzS8o8g.5trog7.WwZdVwm4w7BwEkLyRB.V7NFG', 'DqHSKuTFkOb48FIOrfstYqKr8mlAi0xGbx1EAFLZ9EowjmLKP01rPArxh6xj', '2024-02-22 07:02:31', '2024-02-22 07:02:31');



ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);



ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);



ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);



ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);



ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;



ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;



ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;



ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;



ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

