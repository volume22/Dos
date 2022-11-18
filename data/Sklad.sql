-- Adminer 4.8.1 PostgreSQL 13.3 dump

\connect "Sklad";



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



-- 2022-11-18 14:29:26.06082+00
