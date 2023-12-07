# Verziókezelés
## Helyi repo létrehozása
- inicializálás:
    > git init
- ellenőrzés:
    > git status
- előkészítés commit-re:
    > git add .
- ellenőrzés:
    > git status
- Helyi gépen ellenőzzikük a felhasználónevünket:
    > git config user.name

    > git config user.email
- eltároljuk mint egy új verzió:
    > git commit -m "first commit"
## Összekapcsolás a távoli repoval
- GitHub repo létrehozása
- Összekapcsolási parancs:
    > git remote add origin https://token@github.com/RakottKrumpli04/CarBlog.git
- Meg kell mondani a legelső alkalommal, hogy melyik ágat használjuk:
    > git push -u origin master
- További verziók esetén:
    > git push




