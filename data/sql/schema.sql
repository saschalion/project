CREATE TABLE city (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE education (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE educational_institution (id BIGINT AUTO_INCREMENT, education_id BIGINT, name_educational_institution VARCHAR(150), diploma VARCHAR(20), year_graduation DATE, diploma_qualification VARCHAR(100), speciality_diploma VARCHAR(150), INDEX education_id_idx (education_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE educational_institution_extra (id BIGINT AUTO_INCREMENT, study_extra VARCHAR(30), name_educational_institution_extra VARCHAR(150), diploma_extra VARCHAR(20), year_graduation_extra DATE, diploma_qualification_extra VARCHAR(100), speciality_diploma_extra VARCHAR(150), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE family (id BIGINT AUTO_INCREMENT, relation_degree VARCHAR(40), marriage_status VARCHAR(40), children VARCHAR(40), date_birth_children DATE, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE foreign_language (id BIGINT AUTO_INCREMENT, name_foreign_language VARCHAR(100), degree_knowledge_foreign_languages VARCHAR(100), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE jobeet_category (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE jobeet_job (id BIGINT AUTO_INCREMENT, price FLOAT(18, 2), tab_id VARCHAR(30) NOT NULL UNIQUE, number_insurace VARCHAR(12) NOT NULL, pension_sertificate VARCHAR(20) NOT NULL, nature_work VARCHAR(30), type_work VARCHAR(30), labor_contract VARCHAR(10), labor_contract_date DATE, category_id BIGINT NOT NULL, status_id BIGINT NOT NULL, sf_guard_user_id BIGINT NOT NULL, passport_id BIGINT, foreign_language_id BIGINT, educational_institution_id BIGINT, educational_institution_extra_id BIGINT, profession_id BIGINT, family_id BIGINT, military_records_id BIGINT, leaving_table_id BIGINT, citizenship VARCHAR(150), last_name VARCHAR(100) NOT NULL, first_name VARCHAR(100) NOT NULL, three_name VARCHAR(100) NOT NULL, type VARCHAR(255), data_birth DATE NOT NULL, phone VARCHAR(20) NOT NULL, mobile_phone VARCHAR(20), city_id BIGINT, adress VARCHAR(150) NOT NULL, email VARCHAR(255) UNIQUE, logo VARCHAR(255), more_information VARCHAR(255), token VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX category_id_idx (category_id), INDEX city_id_idx (city_id), INDEX status_id_idx (status_id), INDEX sf_guard_user_id_idx (sf_guard_user_id), INDEX passport_id_idx (passport_id), INDEX foreign_language_id_idx (foreign_language_id), INDEX educational_institution_id_idx (educational_institution_id), INDEX educational_institution_extra_id_idx (educational_institution_extra_id), INDEX profession_id_idx (profession_id), INDEX family_id_idx (family_id), INDEX military_records_id_idx (military_records_id), INDEX leaving_table_id_idx (leaving_table_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE leaving_table (id BIGINT AUTO_INCREMENT, kind_leave VARCHAR(80), getting_started DATE, end_work DATE, number_vacation_days VARCHAR(2), commencement DATE, end_leave DATE, base_release VARCHAR(60), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE military_records (id BIGINT AUTO_INCREMENT, group_accounting VARCHAR(255), category_accounting VARCHAR(255), composition VARCHAR(255), military_rank VARCHAR(255), military_discount_specialty VARCHAR(255), number_military_discount_specialty VARCHAR(255), fitness VARCHAR(255), name_district_military_office VARCHAR(255), number_special_accounting VARCHAR(255), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE passport (id BIGINT AUTO_INCREMENT, passport_number VARCHAR(11) NOT NULL UNIQUE, issuance_passports VARCHAR(50) NOT NULL, date_issue_passport DATE NOT NULL, code_division VARCHAR(7) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE profession (id BIGINT AUTO_INCREMENT, main_profession VARCHAR(40), other_profession VARCHAR(40), total_length VARCHAR(2), continuous_service VARCHAR(2), last_job VARCHAR(100), termination_date DATE, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE status (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE educational_institution ADD CONSTRAINT educational_institution_education_id_education_id FOREIGN KEY (education_id) REFERENCES education(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_status_id_status_id FOREIGN KEY (status_id) REFERENCES status(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_sf_guard_user_id_sf_guard_user_id FOREIGN KEY (sf_guard_user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_profession_id_profession_id FOREIGN KEY (profession_id) REFERENCES profession(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_passport_id_passport_id FOREIGN KEY (passport_id) REFERENCES passport(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_military_records_id_military_records_id FOREIGN KEY (military_records_id) REFERENCES military_records(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_leaving_table_id_leaving_table_id FOREIGN KEY (leaving_table_id) REFERENCES leaving_table(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_foreign_language_id_foreign_language_id FOREIGN KEY (foreign_language_id) REFERENCES foreign_language(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_family_id_family_id FOREIGN KEY (family_id) REFERENCES family(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_educational_institution_id_educational_institution_id FOREIGN KEY (educational_institution_id) REFERENCES educational_institution(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_city_id_city_id FOREIGN KEY (city_id) REFERENCES city(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jobeet_job_category_id_jobeet_category_id FOREIGN KEY (category_id) REFERENCES jobeet_category(id) ON DELETE CASCADE;
ALTER TABLE jobeet_job ADD CONSTRAINT jeei FOREIGN KEY (educational_institution_extra_id) REFERENCES educational_institution_extra(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
