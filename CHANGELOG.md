

### 1.1.3 - 14/01/2015

 Changes: 


 * Changed theme name, added forum, documentation and pro links
 * This fixes #9 screeshot size
 * Issue #10 fixed

Am sters "Footer Navigation" din "functions.php".
 * Revert "Issue #10 fixed"

This reverts commit dd299b48b8f07385ff2237fc4b9cee5355697ee7.
 * Issue #10 fixed

Am sters "Footer Navigation" din "functions.php".
 * Update style.css
 * Issue #11 fixed

Issue fixed: "As vrea sa facem update la temele lite care nu sunt
publicate si sa punem pe homepage cumva latest posts .

Ideea e ca eu vreau sa afisam homepage custom by default, dar cum
setarea default in wp este : Latest posts, trebuie sa o respectam.

Se pot face mici smecherii de genul :
https://wordpress.org/themes/vantage, adica sa pune o mica sectiune cu
latest posts undeva .

O sa fac eu asta la Zerif, si ar trebui facut si la Constructzine Lite +
temele in asteptare ( medica/denta/mooveit /plumbeit )".
 * Issue #12 fixed

Issue fixed: Cele doua butoane in customizer sa le adaugi te rog.
 * Issue #14 fixed

Issue fixed: Observ ca sunt doua imagini care nu cred ca au legatura cu
tema lite, sa le stergi te rog.
 * Issue #21 fixed

Issue fixed: Pune te rog html5shive in functions.php.
 * Issue #20 fixed

Issue fixed: Ai in functions textdomain "twentytwelve".
 * Issue #16 fixed

Issue fixed: Sunt linii libere in customizer.js , poti optimiza putin?
 * Issue #17 fixed

Issue fixed: In SCSS ai folosit cam aiurea nested selector si a rezultat
asa ceva: #single-article .single-article-entry .

.single-article-entry este destul de unic, il poti scoate de sub
#single-article ?.
 * Issue #15 fixed

Issue fixed: Fa merge la fisierele js si aici pls ( desigur doar la
fisierele unde se poate ).
 * Issue #19 fixed

Issue fixed: Fa minify la FA te rog.
 * Issue #22 fixed

Issue fixed: adauga te rog add_theme_support( "title-tag" ) in aceasta
tema, detalii:
http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag.
 * Issue #13 fixed

Issue fixed: Adauga link in fisierul de licenta pentru js-urile
folosite.
 * Issue #24 fixed

Issue fixed: La fel ca la mooveit
"Copyright © Movatique is proudly powered by WordPress. "

movatique trebuie sa fie numele site-ului
adauga la sfarsit si Theme: Mooveit Lite.
adauga link pe wordpress catre wordpress si link pe numele temei catre
tema
toate textele trebuie sa se poata traduce.
 * Issue #25 fixed

Issue fixed: adauga prefix pentru optiuni cu numele temei ci nu cu
"ti_".
 * Issue #26 fixed

Issue fixed: Inlocuieste fancybox cu nivo lightbox si adauga link de
licenta in readme.
 * Issue #27 fixed

Issue fixed: All add_theme_support, add_image_size, add_nav_menu,
register_nav_menus and load_theme_textdomain should be setup and
registered within a theme specific setup function tied to the {{{
after_setup_theme }}} action.

Please look into Twenty Fifteen theme for code example.
 * Issue #26 fixed

Mici editari la Nivo Lightbox.
 * Merge pull request #28 from robciucioan/development

Development
 * Update style.css


### 1.1 - 05/12/2014

 Changes: 


 * added update engine


### 1.0 - 05/12/2014

 Changes: 


 * DentaTheme Free

Am uploadat DentaTheme Free.
 * Issue #1. Eroare iconițe.

Am reparat eroarea iconițelor de la secțiunea features.
 * Am șters fișierele

Am șters fișierele de la DentaTheme Free și urmează să uploadez noua
versiune a temei fiindcă am efectuat mici modificări la tema principală.
 * DentaTheme Free release
 * Issue fixed

I changed functions prefix from ti_ to denta_lite_. I added
sanitize
