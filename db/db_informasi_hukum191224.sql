PGDMP     (                    |            db_informasi_hukum    10.23    10.23                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            	           1262    24632    db_informasi_hukum    DATABASE     �   CREATE DATABASE db_informasi_hukum WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_Indonesia.1252' LC_CTYPE = 'English_Indonesia.1252';
 "   DROP DATABASE db_informasi_hukum;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            
           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false                       0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    24633    document_type    TABLE     �   CREATE TABLE public.document_type (
    id integer NOT NULL,
    name character varying(100),
    singkatan character varying(50),
    parent_id integer,
    status character varying(2),
    integrasi character varying(2)
);
 !   DROP TABLE public.document_type;
       public         postgres    false    3            �            1259    24636    document_type_id_seq    SEQUENCE     �   CREATE SEQUENCE public.document_type_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.document_type_id_seq;
       public       postgres    false    3    196                       0    0    document_type_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.document_type_id_seq OWNED BY public.document_type.id;
            public       postgres    false    197            �            1259    24638 	   documents    TABLE     H  CREATE TABLE public.documents (
    tipe_dokumen character varying(100),
    judul text,
    tahun_terbit character varying(100),
    bidang_hukum text,
    link text,
    id bigint NOT NULL,
    qrcode character varying(100),
    sampul character varying(100),
    created_at integer,
    created_date character varying(20)
);
    DROP TABLE public.documents;
       public         postgres    false    3            �            1259    24644    documents_id_seq    SEQUENCE     y   CREATE SEQUENCE public.documents_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.documents_id_seq;
       public       postgres    false    3    198                       0    0    documents_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.documents_id_seq OWNED BY public.documents.id;
            public       postgres    false    199            �            1259    24646    user    TABLE     �  CREATE TABLE public."user" (
    id integer NOT NULL,
    users character varying NOT NULL,
    auth_key character varying NOT NULL,
    password_hash character varying,
    password_reset_token character varying NOT NULL,
    email character varying,
    status integer,
    created_at character varying NOT NULL,
    updated_at character varying,
    picture character varying,
    updated_by character varying
);
    DROP TABLE public."user";
       public         postgres    false    3            �            1259    24652    user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.user_id_seq;
       public       postgres    false    200    3                       0    0    user_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;
            public       postgres    false    201            |
           2604    24654    document_type id    DEFAULT     t   ALTER TABLE ONLY public.document_type ALTER COLUMN id SET DEFAULT nextval('public.document_type_id_seq'::regclass);
 ?   ALTER TABLE public.document_type ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    197    196            }
           2604    24655    documents id    DEFAULT     l   ALTER TABLE ONLY public.documents ALTER COLUMN id SET DEFAULT nextval('public.documents_id_seq'::regclass);
 ;   ALTER TABLE public.documents ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    199    198            ~
           2604    24656    user id    DEFAULT     d   ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);
 8   ALTER TABLE public."user" ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    201    200            �
          0    24633    document_type 
   TABLE DATA               Z   COPY public.document_type (id, name, singkatan, parent_id, status, integrasi) FROM stdin;
    public       postgres    false    196   �                  0    24638 	   documents 
   TABLE DATA               �   COPY public.documents (tipe_dokumen, judul, tahun_terbit, bidang_hukum, link, id, qrcode, sampul, created_at, created_date) FROM stdin;
    public       postgres    false    198   �                 0    24646    user 
   TABLE DATA               �   COPY public."user" (id, users, auth_key, password_hash, password_reset_token, email, status, created_at, updated_at, picture, updated_by) FROM stdin;
    public       postgres    false    200   �                  0    0    document_type_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.document_type_id_seq', 1, true);
            public       postgres    false    197                       0    0    documents_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.documents_id_seq', 2, true);
            public       postgres    false    199                       0    0    user_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.user_id_seq', 1, true);
            public       postgres    false    201            �
           2606    24658     document_type document_type_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.document_type
    ADD CONSTRAINT document_type_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.document_type DROP CONSTRAINT document_type_pkey;
       public         postgres    false    196            �
           2606    24660    user user_pk 
   CONSTRAINT     L   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pk PRIMARY KEY (id);
 8   ALTER TABLE ONLY public."user" DROP CONSTRAINT user_pk;
       public         postgres    false    200            �
           2606    24662    user user_unique 
   CONSTRAINT     N   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_unique UNIQUE (users);
 <   ALTER TABLE ONLY public."user" DROP CONSTRAINT user_unique;
       public         postgres    false    200            �
   *   x�3�H-J,)-J�SpI238\�\989�b���� �i	&          �   x�m�]K�0���_�?Ц�Sa �pR
�F�ɒ��M�G����ۥ�sq�x� o&B.����&�W��F��2�-� �2�ZWRId�H�N�	�d�[ת�jV��[�/P�W������is�7�9�'.�!�9�я��!س����?�����N��]��Q^>��{�*���Զj�Go�璆�� z�����+t_SJ �Sy         }   x�3�LL�����T1�T14P)5�LN*�KJ�,7�L.�2�ʬ�/5	�v))�)3,�7�0�+0���H��.��*�� 1�Ѐ����D��P��H��������!f�``aelbe`������� n�#�     