# Praktyki-Art-of-Code
Moja praca wykonana podczas miesiąca praktyk w Art of Code


2.05

Poznałam zasady BHP dotyczące pracy z komputerem, a także planowaniem budowy biur, stanowisk. Zgłębiłam tematy odnośnie ochrony pożarowej, pierwszej pomocy w przypadku porażenia prądem i innych zagrożeń życia, środki ochrony indywidualnej i zbiorowej, a także rodzaje i środki ochrony przeciwpożarowej.


3.05

Instalacja systemu Windows 10 Pro na maszynie wirtualnej. Przeprowadziłam podstawową konfigurację systemu pozwalającą na dalszą pracę dla użytkownika. Zapoznałam się z różnicami między systemem Windows 10 Pro (wersja dla klienta) oraz systemem Windows Server 2016 R2 (wersja serwerowa).


4.05

Nauka darmowego, międzyplatformowego silnika do tworzenia gier "Godot" oraz stworzenie pierwszego projektu przy pomocy poradnika. Poznanie podstawowych opcji, takich jak: sposoby na przemieszczanie postaci, tworzenie podstawowych scen, dodawnie obiektów, podstawowe mechaniki z pracą na wartstwach, w tym kolizje.


5.05

Dalsza nauka silnika do tworzenia gier "Godot". Zapoznałam się z tworzeniem teł dla gry, sterowaniem kamerą podczas przemieszczania się postaci w technologii 2D, tworzenie klas dla obiektów, posługiwanie się wektorami, wbudowana funkcja Godota _physics_process() oraz _ready(), obliczanie prędkości, nadanie obiektom grawitacji, system "unicestwiania" przeciwników i śmierci.

6.05

Poznałam rodzaje licencji oprogramowania komputerowego oraz rozpowszechniania programów komputerowych. Uczyłam się z korzystanie z narzędzia wbudowanego w system Windows o nazwie Command Prompt, w skrócie CMD. Poznałam polecenia dotyczące obsługi dysków takie jak diskpart, chkdsk, a także obsługi podstawowych poleceń takich jak runas, cls, cd, taskkill, tasklist, time, date, dir, w32tm, hostname, find, echo, exit itp.

9.05

Zapoznałam się z przystawkami w systemie Windows takimi jak: Użytkownicy i grupy - tworzenie użytkowników i grup oraz przypisywanie użytkowników do grup, devmgm.msc (menedżer urządzeń), gpedit.msc (zasady grupy), gpmc.msc (zarządzanie zasadami grupy), perfmon.msc (monitor niezawodności i wydajności). Wykonałam oczyszczanie systemu przy użyciu narzędzia CCleaner, RegCleaner, a także wykonałam defragmentację dysku.

10.05

Zainstalowałam system operacyjny Linux Ubuntu, wykonałam jego podstawową konfigurację w celu umożliwienia pracy dla użytkownika. Poznałam podstawowe komendy terminala, przeprowadziłam operacje na plikach, partycjach, a także plikach konfiguracyjnych zawartych w katalogu /etc. Dokonałam instalacji programów użytkowych takich jak Gimp, Microsoft Teams, Audacity, Discord, 7-zip, OBS studio.

11.05

Instalacja systemu operacyjnego Microsoft Windows Server 2016 w wersji Standard na maszynie wirtualnej posługując się programem virtual box. Przeprowadziłam podstawową konfigurację systemu w tym nadanie odpowiedniego adresu IP oraz DNS, a także zainstalowałam usługę Active Directory oraz DNS. Utworzyłam nowy las oraz domenę TEST.LOCAL.

12.05

Utworzyłam jednostki organizacyjne biuro, pracownicy oraz administratorzy w domenie TEST.LOCAL, dodałam do każdej z jednostek po 5 użytkowników. Dla członków jednostki biura przypisałam możliwość logowania między 8 a 16 od poniedziałku do piątku, tak samo dla pracowaników, u administracji pozostawiłam bez zmian. Umożliwiłam także zdalne sterowanie usługami pulpitu zdalnego.

13.05

Dla wczoraj utworzonych jednostek organizacyjnych przypisałam zasady grupy. Dla użytkowników przypisanych do "biura" przy użyciu szablonów administracyjnych zablokowałam dostęp do panelu sterowania oraz edytora rejestru, to samo wykonałam dla użytkowników "pracownicy", a także dla "pracowników" uniemożliwiłam odczyt i zapis dysków wymiennych, dodawanie i usuwanie drukarek, możliwość personalizacji tapety. Dla wszystkich użytkowników domeny TEST.LOCAL wyłączyłam automatyczne aktualizacje systemu Windows.

16.05

Przy użyciu emulatora ze strony TP-Link przeprowadziłam konfigurację routera o modelu Archer C6. Zapoznałam się z możliwościami konfiguracyjnymi, w tym z konfiguracją połączenia z internetem, ustawieniami sieci wewnętrznej, konfiguracją WLAN oraz serwera DHCP i DNS, ustawiłam też filtrowanie adresów MAC. Przyjrzałam się możliwym ustawieniom servera VPN oraz opcji VLAN.

17.05

Przy użyciu emulatora ze strony TP-Link zapoznałam się z możliwościami konfiguracji przełącznika zarządzalnego TL-SG3424 w wersji v2. Ustanowiłam w nim nowy adres IP, maskę oraz bramę domyślną. Przypisałam port Mirroring, odizolowałam porty (wybrane). Utworzyłam 2 sieci VLAN, pierwsza zawierająca porty z zakresu 1-14, druga 15-28. Odblokowałam protokół Spanning Tree w wersji MSTP.

18.05

Do wcześniej konfigurowanego na maszynie wirtualnej systemu Windows Server 2016 dodałam rolę "Serwer DHCP", a także "Dostęp Zdalny". Skonfigurowałam serwer DHCP na serwerze, tworząc pulę adresów z zakresu 10.0.0.5 - 10.0.0.60, z zastrzeżeniem adresów 10.0.0.15 - 10.0.0.20. Czas dzierżawy wyznaczyłam na 4,5h. Później skonfigurowałam i włączyłam routing.

19.05

Na nowo stworzonym serwerze Windows Server 2016 zainstalowałam rolę serwer DNS. Skonfigurowałam go oraz stworzyłam strefę wyszukiwania do przodu oraz wstecz, sprawdziłam poprawność konfiguracji przez podłączenie hosta do sieci i zastosowanie w jego ustawieniach przy serwerze DNS adresu IP wcześniej skonfigurowanego serwera. Dodatkowo zainstalowałam rolę Serwer IIS.

20.05

Skonfigurowałam serwer IIS, w ramach którego stworzyłam witrynę "firma". Utworzyłam nowy katalog na dysku C oraz stworzyłam w nim dokument HTML mający pełnić rolę strony tytułowej domeny. W ustawieniach zmieniłam dokument domyślny na nowoutworzony plik, a także w strefie wyszukiwania do przodu i wstecz dodałam domenę strony. Dla utworzonego użytkownika "admin" stworzyłam w witrynie "firma" publikację FTP przyznając mu uprawnienia do zapisu i odczytu.

23.05
Stworzyłam stronę w HTML, tak zwanym języku znaczników, z dołączonym do niej kaskadowym arkuszem stylów (CSS). Stworzona strona składa się z 6 elementów, jakimi są: articles.html, contact.html, links.html, newsletter.html, pseudo.css oraz najważniejszego, głównego elementu startowego index.html. Zaprojektowałam grafikę dla witryny, strukturę strony oraz rozplanowałam dalszy projekt.

24.05
Na wcześniej stworzonej stronie uzupełniłam index.html. Dodałam header, w którym znajduje się baner oraz nawigacja, jako treść przedstawiłam proponowane artykuły, które w przyszłości będą linkami do rzeczywistych artykułów. Uzupełniłam też stronę links.html, gdzie dodałam linki przydatne do nauki do egzaminu INF.02. Utworzyłam repozytorium gita, w którym zamieściłam elementy projektu i połączyłam je z repozytorium na githubie.

25.05
Skonfigurowałam podstronę contact.html. Dodałam na niej moje dane kontaktowe: imię i nazwisko, firmę oraz social media: twitter, facebook, instagram. Poprawiłam układ stron w dokumencie pseudo.css, aby był dostosowany do potrzeb tej podstrony. Rozpoczęłam research w kwestii utworzenia newslettera i bazy danych na stronie.

26.05
Okazało się, że Github Pages, na którym początkowo planowałam zrobić bazę danych nie obsługuje Pythona ani PHP, więc zaczęłam pracę lokalnie przy użyciu środowiska XAMPP. Skonfigurowałam podstronę newsletter.html oraz utworzyłam nowe pliki: newsletter.db (baza danych dla nazw użytkownika i emaili) oraz add_email_to_db.php (odpowiada za odebranie danych z formularza strony, wysłanie maila powitalnego oraz dodanie odpowiedniego wpisu do bazy danych). Umieściłam też narzędzie PHPMailer w folderze, aby móc korzystać z jego możliwości w kodzie.