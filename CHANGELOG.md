

### 1.1.7 - 18/02/2015

 Changes: 


 * Fixed custmizer erorr sanitization


### 1.1.7 - 12/02/2015

 Changes: 


 * Issue #48 (screenshot f urat) fixed

asta inca nu arata grozav, ar trebui pus text mai ok + activata
sectiunea cu about us /article section
 * Issue #61 (similar article size) fixed

We should limit the similar article text and left-align the text :
http://awesomescreenshot.com/0624aniv08
 * Issues: #56 (Default settings), #57 (panelfrontpage) and #59 (Copyright issue) fixed

Issue #56:

oate chestiile din customizer ar trebui sa aibe valori default ( vezi
zerif ) , adica atunci cand lumea instaleaza tema, site-ul nu numai ca
arata bine, dar are deja completat customizerul

@robi09 asa ar trebui sa facem la toate temele

Issue #57:

@robi09 @robciucioan
In customizer frontpage ar trebui sa fie de tip panel, iar apoi setting
boxes pt feature box 1, 2,3 , featured article, latest news ( de unde sa
poate modifica si nr default de posturi )

comentariile astea se aplica la toate temele

Issue #59

Tema ar trebui sa contina in dreapta hardcodat : denta lite powered by
wordpress, iar in stanga sa ramana chestia de copyright care poate fi
modificata ( dar cu valoare default in customizer cum am zis )

Formatul ar trebui sa fie la fel ca la restul temelor cu link nofollow
etc.
@robi09
 * Issue #64 (Reintroducere sectiune about us) fixed

Reintrodu sectiunea about us in tema pls.
 * Revert "Issue #64 (Reintroducere sectiune about us) fixed"

This reverts commit 9fd893469614fa9433a8588082bd3fb7de6ef459.
 * Issue #63 (Reintroducere sectiune about us) fixed

Reintrodu sectiunea about us in tema pls.
 * Issue #62 (Upsell in customizer) fixed

@robi09 @robciucioan parca am zis asta de cateva ori, lipsesc boxurile
de upgrade, ca la constructzine lite :
http://awesomescreenshot.com/0cb4ank2b8
 * Merge pull request #66 from robciucioan/development

Development
 * Issue #61 (Adauga prefix la functia limitwords() .) fixed
 * Update style.css
 * Issue #59 (Copyright issue) fixed

Tema ar trebui sa contina in dreapta hardcodat : denta lite powered by
wordpress, iar in stanga sa ramana chestia de copyright care poate fi
modificata ( dar cu valoare default in customizer cum am zis )

Formatul ar trebui sa fie la fel ca la restul temelor cu link nofollow
etc.
 * Issue #64 (Customizer text 1) fixed

ma refer la asta http://awesomescreenshot.com/0524dkhr86, dar uite cum
ar trebui sa arate default :http://demo.themeisle.com/dentatheme/ ( cu o
imagine GPL )
 * Issue #60 (demo issues) fixed

poti pune o imagine blank ca la zerif
 * Issue #60 (demo issues) fixed

da e mai ok, dar tot trebuiesc widgeturile de jos, 4 posturi cu imagini
etc. Cine a zis sa scoti partea aia de sus ? adica puteai scoate femeia,
dar nu si sectiunea, se vede f rau direct alea 3 features nu ?
 * Issue #59 (Copyright issue) fixed
 * Merge pull request #68 from robciucioan/development

Issue #61 (Adauga prefix la functia limitwords() .) fixed
 * Fixed conflict
 * Merge branch 'robciucioan-development' into development
 * Fixed front page and other small issues
 * Added link to the theme in footer


### 1.1.6 - 28/01/2015

 Changes: 


 * Issue #52 fixed (New copyright)

Copyright (C) [Nume site] | Proudly powered by WordPress.
 * Issue #51 fixed (title tag bc)

Trebuie sa faci ca titlul sa fie compatibil si cu alte versiuni de
wordpress, uite aici exemplu:
http://codex.wordpress.org/Title_Tag
 * Issue #50 fixed (RECOMMENDED: Tags: is either empty or missing in style.css header)

RECOMMENDED: Tags: is either empty or missing in style.css header.

NU stiu exact de ce imi da asta theme checkerul cand vreau sa fac update

@robi09 @robciucioan
 * Issue #48 fixed (screenshot f urat)

@robi09 @robciucioan screenshotul arata f rau, fara featured images la
posts, cu imaginile alea standard etc, putem sa facem unu mai ok ?

Putem trimite toate cele 3 teme lite azi ? Adica sa fixam toate issues ?
 * Issue #44 fixed (Unminified scripts)

De ce nu punem totul neminificat ? @robciucioan cred ca ai intles
gresit, el vrea totul neminificat, iar tu ai facut tocmai invers
 * Issue #47 fixed (Customizer update)

Faci update si aici la fel ca la mooveit si media, cum am discutat.
 * Issue #51 fixed (Title tag bc)

Trebuie sa faci ca titlul sa fie compatibil si cu alte versiuni de
wordpress, uite aici exemplu:
http://codex.wordpress.org/Title_Tag
 * Merge pull request #53 from robciucioan/development

Development
 * Update style.css


### 1.1.5 - 26/01/2015

 Changes: 


 * Update style.css
 * Update style.css


### 1.1.4 - 26/01/2015

 Changes: 


 * Issue #37 fixed

Issue fixed:

Daca link-ul in meniu are mai mult de un rand, se vede rau.
 * Merge pull request #38 from robciucioan/development

Issue #37 fixed
 * Issue #40 fixed

Issue fixed:

style.css : line 821 Wrong syntax
 * Issue #41 fixed

Issue fixed:

scoate logo-ul ti de pe screenshot
 * Issue #42 fixed

Issue fixed:

page-blog.php: line 42 Text string missing
index.php: line 34 Text string missing
 * Issue #42 fixed

Issue fixed:

Title Tag: It displays Title tag twice in the source
 * Revert "Issue #42 fixed"

This reverts commit e5e9a634aae817526b372aabd16f4afa10ce95b0.
 * Issue #43 fixed

Issue fixed:

Title Tag: It displays Title tag twice in the source
 * Issue #44 fixed

Issue fixed:

Provide unminfied version with along with minified js
allscript.js
 * Merge pull request #45 from robciucioan/development

Development


### 1.1.4 - 20/01/2015

 Changes: 


 * Issue #18 fixed

Issue fixed:

am vazut ca ai folosit mixin pentru transition, este corect ce ai facut,
dar codul de la transition se repeta la nesfarsit. Uite o solutie buna:
faci o clasa .transition unde pui @include transition() apoi unde ai
nevoie de transition faci extend la clasa respectiva, rezultatul va fi
un cod mai optimizat.
 * Issue #30 fixed

Issue fixed:

Adauga o bordura la header, se vede rau tare sectiunea aia.
 * Issue #31 fixed

Issue fixed:

La latest news adauga border-bottom si putin mai mult spatiu in jos (
adica vertical , adaugi margin-bottom ).
 * Issue #32 fixed

Issue fixed:

Spatiu-ul dintre featured icons si latest news este mult prea mare.
 * Issue #33 fixed

Issue fixed:

rtl.css shouild be in the main folder
 * Issue #34 fixed

Issue fixed:

logo image should not be set by default - there's no real reason for a
Theme to bundle a default logo. Unless the user configures either a
favicon or a logo - ie by defining/uploading one - the Theme should
output/display neither.
 * Merge pull request #35 from robciucioan/development

Development
 * Update style.css


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
