<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-14 00:14:21 --> Could not find the language line "vendor_home_page"
ERROR - 2020-05-14 00:14:24 --> 404 Page Not Found: /index
ERROR - 2020-05-14 00:14:24 --> 404 Page Not Found: /index
ERROR - 2020-05-14 00:14:24 --> 404 Page Not Found: /index
ERROR - 2020-05-14 00:20:14 --> PDO: Invalid or non-existent subdriver
ERROR - 2020-05-14 00:20:33 --> Severity: Error --> Call to undefined function pg_connect() C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2020-05-14 00:26:03 --> Severity: Error --> Call to undefined function pg_connect() C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2020-05-14 00:28:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not translate host name &quot;pgsql:host=ec2-52-86-73-86.compute-1.amazonaws.com;port=5432;dbname=d4lh7uuqa50628&quot; to address: Unknown host C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2020-05-14 00:28:02 --> Unable to connect to the database
ERROR - 2020-05-14 00:28:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not translate host name &quot;pgsql:host=ec2-52-86-73-86.compute-1.amazonaws.com;port=5432;dbname=d4lh7uuqa50628&quot; to address: Unknown host C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2020-05-14 00:28:04 --> Unable to connect to the database
ERROR - 2020-05-14 00:28:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not translate host name &quot;pgsql:host=ec2-52-86-73-86.compute-1.amazonaws.com;dbname=d4lh7uuqa50628&quot; to address: Unknown host C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 154
ERROR - 2020-05-14 00:28:26 --> Unable to connect to the database
ERROR - 2020-05-14 00:28:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;value_store&quot; does not exist
LINE 1: SELECT value FROM value_store WHERE thekey = 'outOfStock'
                          ^ C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 00:28:37 --> Query error: ERROR:  relation "value_store" does not exist
LINE 1: SELECT value FROM value_store WHERE thekey = 'outOfStock'
                          ^ - Invalid query: SELECT value FROM value_store WHERE thekey = 'outOfStock'
ERROR - 2020-05-14 00:29:16 --> PDO: Invalid or non-existent subdriver
ERROR - 2020-05-14 00:29:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;value_store&quot; does not exist
LINE 1: SELECT value FROM value_store WHERE thekey = 'outOfStock'
                          ^ C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 00:29:23 --> Query error: ERROR:  relation "value_store" does not exist
LINE 1: SELECT value FROM value_store WHERE thekey = 'outOfStock'
                          ^ - Invalid query: SELECT value FROM value_store WHERE thekey = 'outOfStock'
ERROR - 2020-05-14 00:31:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;languages&quot; does not exist
LINE 2: FROM &quot;languages&quot;
             ^ C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 00:31:41 --> Query error: ERROR:  relation "languages" does not exist
LINE 2: FROM "languages"
             ^ - Invalid query: SELECT *
FROM "languages"
WHERE "abbr" = ''
ERROR - 2020-05-14 00:36:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;active_pages&quot; does not exist
LINE 2: FROM &quot;active_pages&quot;
             ^ C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 00:36:25 --> Query error: ERROR:  relation "active_pages" does not exist
LINE 2: FROM "active_pages"
             ^ - Invalid query: SELECT "name"
FROM "active_pages"
WHERE "enabled" = TRUE
ERROR - 2020-05-14 00:37:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;enabled&quot; = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 00:37:48 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "enabled" = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "name"
FROM "active_pages"
WHERE "enabled" = TRUE
ERROR - 2020-05-14 00:39:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;enabled&quot; = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 00:39:31 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "enabled" = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "name"
FROM "active_pages"
WHERE "enabled" = TRUE
ERROR - 2020-05-14 00:40:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;enabled&quot; = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 00:40:04 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "enabled" = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "name"
FROM "active_pages"
WHERE "enabled" = TRUE
ERROR - 2020-05-14 00:40:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;enabled&quot; = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 00:40:15 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "enabled" = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "name"
FROM "active_pages"
WHERE "enabled" = TRUE
ERROR - 2020-05-14 00:40:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE &quot;enabled&quot; = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 00:40:51 --> Query error: ERROR:  operator does not exist: smallint = boolean
LINE 3: WHERE "enabled" = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "name"
FROM "active_pages"
WHERE "enabled" = TRUE
ERROR - 2020-05-14 01:07:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;seo_pages_translations&quot; does not exist
LINE 2: FROM &quot;seo_pages_translations&quot;
             ^ C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 01:07:45 --> Query error: ERROR:  relation "seo_pages_translations" does not exist
LINE 2: FROM "seo_pages_translations"
             ^ - Invalid query: SELECT *
FROM "seo_pages_translations"
WHERE "page_type" = 'home'
AND "abbr" = 'en'
ERROR - 2020-05-14 01:13:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE &quot;enabled&quot; = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 01:13:00 --> Query error: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE "enabled" = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "name"
FROM "active_pages"
WHERE "enabled" = TRUE
ERROR - 2020-05-14 01:13:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE &quot;enabled&quot; = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 01:13:10 --> Query error: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE "enabled" = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "name"
FROM "active_pages"
WHERE "enabled" = TRUE
ERROR - 2020-05-14 01:13:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE &quot;enabled&quot; = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 01:13:14 --> Query error: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE "enabled" = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "name"
FROM "active_pages"
WHERE "enabled" = TRUE
ERROR - 2020-05-14 01:13:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE &quot;enabled&quot; = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 01:13:16 --> Query error: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE "enabled" = TRUE
                        ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "name"
FROM "active_pages"
WHERE "enabled" = TRUE
ERROR - 2020-05-14 01:13:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;seo_pages_translations&quot; does not exist
LINE 2: FROM &quot;seo_pages_translations&quot;
             ^ C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 01:13:55 --> Query error: ERROR:  relation "seo_pages_translations" does not exist
LINE 2: FROM "seo_pages_translations"
             ^ - Invalid query: SELECT *
FROM "seo_pages_translations"
WHERE "page_type" = 'home'
AND "abbr" = 'en'
ERROR - 2020-05-14 18:21:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;seo_pages_translations&quot; does not exist
LINE 2: FROM &quot;seo_pages_translations&quot;
             ^ C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 18:21:38 --> Query error: ERROR:  relation "seo_pages_translations" does not exist
LINE 2: FROM "seo_pages_translations"
             ^ - Invalid query: SELECT *
FROM "seo_pages_translations"
WHERE "page_type" = 'home'
AND "abbr" = 'en'
ERROR - 2020-05-14 18:21:40 --> 404 Page Not Found: /index
ERROR - 2020-05-14 18:24:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;abbr&quot; does not exist
LINE 4: AND &quot;abbr&quot; = 'en'
            ^
HINT:  Perhaps you meant to reference the column &quot;seo_pages_translations.abbrc&quot;. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 18:24:06 --> Query error: ERROR:  column "abbr" does not exist
LINE 4: AND "abbr" = 'en'
            ^
HINT:  Perhaps you meant to reference the column "seo_pages_translations.abbrc". - Invalid query: SELECT *
FROM "seo_pages_translations"
WHERE "page_type" = 'home'
AND "abbr" = 'en'
ERROR - 2020-05-14 18:24:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;shop_categories_translations&quot; does not exist
LINE 2: FROM &quot;shop_categories_translations&quot;
             ^ C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 18:24:40 --> Query error: ERROR:  relation "shop_categories_translations" does not exist
LINE 2: FROM "shop_categories_translations"
             ^ - Invalid query: SELECT "shop_categories"."sub_for", "shop_categories"."id", "shop_categories_translations"."name"
FROM "shop_categories_translations"
INNER JOIN "shop_categories" ON "shop_categories"."id" = "shop_categories_translations"."for_id"
WHERE "abbr" = 'en'
ORDER BY "position" ASC
ERROR - 2020-05-14 18:36:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;shop_categories&quot; does not exist
LINE 3: INNER JOIN &quot;shop_categories&quot; ON &quot;shop_categories&quot;.&quot;id&quot; = &quot;sh...
                   ^ C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 18:36:20 --> Query error: ERROR:  relation "shop_categories" does not exist
LINE 3: INNER JOIN "shop_categories" ON "shop_categories"."id" = "sh...
                   ^ - Invalid query: SELECT "shop_categories"."sub_for", "shop_categories"."id", "shop_categories_translations"."name"
FROM "shop_categories_translations"
INNER JOIN "shop_categories" ON "shop_categories"."id" = "shop_categories_translations"."for_id"
WHERE "abbr" = 'en'
ORDER BY "position" ASC
ERROR - 2020-05-14 19:04:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function if(boolean, integer, integer) does not exist
LINE 1: SELECT SUM(IF(quantity&lt;=0,1,0)) as out_of_stock, SUM(IF(quan...
                   ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. C:\Users\michael\xampp\htdocs\codeigniter-e\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-05-14 19:04:42 --> Query error: ERROR:  function if(boolean, integer, integer) does not exist
LINE 1: SELECT SUM(IF(quantity<=0,1,0)) as out_of_stock, SUM(IF(quan...
                   ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT SUM(IF(quantity<=0,1,0)) as out_of_stock, SUM(IF(quantity>0,1,0)) as in_stock FROM products WHERE visibility = 1
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: sitelogo C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\header.php 54
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footerContactPhone C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\header.php 61
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footerAboutUs C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 7
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footerContactAddr C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 32
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footerContactPhone C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 37
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footerContactEmail C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 42
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footerSocialFacebook C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 63
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footerSocialTwitter C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 65
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footerSocialGooglePlus C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 67
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footerSocialPinterest C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 69
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footerSocialYoutube C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 71
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: footercopyright C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 81
ERROR - 2020-05-14 19:26:14 --> Severity: Notice --> Undefined variable: addJs C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\footer.php 101
ERROR - 2020-05-14 19:26:18 --> 404 Page Not Found: /index
ERROR - 2020-05-14 19:26:18 --> 404 Page Not Found: /index
ERROR - 2020-05-14 19:29:52 --> 404 Page Not Found: /index
ERROR - 2020-05-14 19:43:28 --> Severity: Notice --> Undefined variable: sitelogo C:\Users\michael\xampp\htdocs\codeigniter-e\application\views\templates\greenlabel\_parts\header.php 54
ERROR - 2020-05-14 19:43:32 --> 404 Page Not Found: /index
ERROR - 2020-05-14 19:43:33 --> 404 Page Not Found: /index
ERROR - 2020-05-14 19:43:33 --> 404 Page Not Found: /index
ERROR - 2020-05-14 19:46:13 --> 404 Page Not Found: /index
ERROR - 2020-05-14 19:46:14 --> 404 Page Not Found: /index
ERROR - 2020-05-14 19:46:14 --> 404 Page Not Found: /index
