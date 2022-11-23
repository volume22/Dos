-- Adminer 4.8.1 PostgreSQL 12.7 dump

DROP TABLE IF EXISTS "orders";
DROP SEQUENCE IF EXISTS orders_id_seq;
CREATE SEQUENCE orders_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."orders" (
    "id" bigint DEFAULT nextval('orders_id_seq') NOT NULL,
    "product_id" integer,
    "status" character varying(255),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "orders_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
INSERT INTO "orders" ("id", "product_id", "status", "created_at", "updated_at") VALUES
(1,	1,	'Payed',	'2022-11-21 13:32:27',	'2022-11-21 13:32:27'),
(4,	2,	'Not Payed',	'2022-11-21 13:53:23',	'2022-11-21 13:53:23'),
(3,	2,	'in progress',	'2022-11-21 13:45:40',	'2022-11-21 13:53:44'),
(5,	2,	'Not Payed',	'2022-11-23 12:08:19',	'2022-11-23 12:08:19'),
(6,	2,	'Not Payed',	'2022-11-23 12:27:17',	'2022-11-23 12:27:17');

DROP TABLE IF EXISTS "products";
DROP SEQUENCE IF EXISTS products_id_seq;
CREATE SEQUENCE products_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."products" (
    "Type" character varying(255) NOT NULL,
    "id" bigint DEFAULT nextval('products_id_seq') NOT NULL,
    "provider_id" integer,
    "product_name" character varying(255),
    "description" character varying(255),
    "price" character varying(255),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "products_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
INSERT INTO "products" ("Type", "id", "provider_id", "product_name", "description", "price", "created_at", "updated_at") VALUES
('Bike',	1,	1,	'Elfbar',	'BC5500',	'5000',	'2022-11-21 13:36:03',	'2022-11-21 13:36:03'),
('ElfBar',	6,	3,	'ElfBAR',	'BC4000 Energy',	'4500',	'2022-11-21 14:57:42',	'2022-11-21 14:57:42'),
('Bike',	2,	2,	'ProSort',	'DC BMX 3x collection',	'4500',	'2022-11-21 13:46:11',	'2022-11-21 13:46:11'),
('Accesories',	4,	2,	'ProSort',	'nike socks',	'450',	'2022-11-21 13:47:19',	'2022-11-21 13:47:19'),
('Shoes',	5,	2,	'ProSort',	'Airmax 300',	'27500',	'2022-11-21 13:47:57',	'2022-11-21 13:47:57');

DROP TABLE IF EXISTS "providers";
DROP SEQUENCE IF EXISTS providers_id_seq;
CREATE SEQUENCE providers_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."providers" (
    "id" bigint DEFAULT nextval('providers_id_seq') NOT NULL,
    "provider_name" character varying(255),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "providers_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
INSERT INTO "providers" ("id", "provider_name", "created_at", "updated_at") VALUES
(1,	'TOO ALATAU',	'2022-11-21 13:36:22',	'2022-11-21 13:36:22'),
(2,	'TOO Kimex',	'2022-11-21 13:48:22',	'2022-11-21 13:48:22'),
(3,	'TOO ProSport',	'2022-11-21 13:48:35',	'2022-11-21 13:48:35'),
(4,	'IP ACS',	'2022-11-21 13:48:54',	'2022-11-21 13:48:54');

DROP TABLE IF EXISTS "transactions";
DROP SEQUENCE IF EXISTS transactions_id_seq;
CREATE SEQUENCE transactions_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."transactions" (
    "id" bigint DEFAULT nextval('transactions_id_seq') NOT NULL,
    "product_id" integer,
    "sum" integer,
    "payment_for_goods" character varying(255),
    "order_id" integer,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "transactions_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
<br />
<b>Warning</b>:  Undefined property: stdClass::$flags in <b>C:\OpenServer\modules\system\html\openserver\adminer\adminer_core.php</b> on line <b>200</b><br />
INSERT INTO "transactions" ("id", "product_id", "sum", "payment_for_goods", "order_id", "created_at", "updated_at") VALUES
(1,	1,	5500,	'QR',	1,	'2022-11-21 13:36:43',	'2022-11-21 13:36:43'),
(2,	1,	2500,	'QR',	2,	NULL,	NULL),
(3,	1,	0,	NULL,	2,	'2022-11-21 13:51:11',	'2022-11-21 13:51:11'),
(4,	1,	19000,	'Cash',	2,	NULL,	NULL);

-- 2022-11-23 12:28:34.172015+00
