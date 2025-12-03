# Haushalt Reparatur Service - WordPress Theme Installation

## 📦 Theme-Paket

Das fertige WordPress-Theme ist verfügbar als:
- **ZIP-Datei**: `haushalt-reparatur-theme.zip` (29 KB)
- **Quellcode**: `wp-content/themes/haushalt-reparatur/`

## 🚀 Installation

### Methode 1: WordPress Dashboard (Empfohlen)

1. Melden Sie sich in Ihrem WordPress-Dashboard an
2. Navigieren Sie zu **Design** → **Themes** → **Installieren**
3. Klicken Sie auf **Theme hochladen**
4. Wählen Sie die Datei `haushalt-reparatur-theme.zip`
5. Klicken Sie auf **Jetzt installieren**
6. Nach der Installation klicken Sie auf **Aktivieren**

### Methode 2: FTP/SFTP Upload

1. Entpacken Sie `haushalt-reparatur-theme.zip`
2. Laden Sie den Ordner `haushalt-reparatur` per FTP/SFTP hoch nach:
   `/wp-content/themes/`
3. Aktivieren Sie das Theme im WordPress-Dashboard

### Methode 3: GitHub Clone

```bash
cd wp-content/themes/
git clone https://github.com/Black10998/PAX-HAUSHALT.git
mv PAX-HAUSHALT/wp-content/themes/haushalt-reparatur ./
```

## ⚙️ Erste Schritte nach der Installation

### 1. Theme-Einstellungen anpassen

Gehen Sie zu **Design** → **Customizer**:

- **Website-Identität**: Laden Sie Ihr Logo hoch
- **Kontaktinformationen**: 
  - Telefonnummer: +49 123 456 7890
  - E-Mail: info@haushalt-reparatur.de
  - Adresse: Ihre Geschäftsadresse

### 2. Menüs erstellen

Gehen Sie zu **Design** → **Menüs**:

**Hauptmenü** (Header):
- Startseite
- Dienstleistungen
- Notdienst 24/7
- Über uns
- Kontakt

Weisen Sie das Menü der Position **"Hauptmenü"** zu.

### 3. Seiten erstellen

Erstellen Sie folgende Seiten unter **Seiten** → **Erstellen**:

- **Startseite** (nutzt automatisch index.php mit Hero-Section)
- **Dienstleistungen**
- **Über uns**
- **Kontakt**
- **Datenschutz**
- **Impressum**

### 4. Startseite festlegen

Gehen Sie zu **Einstellungen** → **Lesen**:
- Wählen Sie "Eine statische Seite"
- Startseite: Wählen Sie Ihre Startseite

## 🎨 Theme-Funktionen

### Hero-Section
Die Hero-Section wird automatisch auf der Startseite angezeigt mit:
- Großer Überschrift
- Untertitel
- 2 Call-to-Action Buttons
- Feature-Liste

### Dienstleistungen
6 vordefinierte Service-Karten:
1. Elektroservice
2. Sanitär & Installationen (Featured)
3. Geräte-Reparaturen
4. Allgemeiner Handwerkerdienst
5. 24/7 Notdienst
6. Wartung & Inspektion

### Kontaktformular
Integriertes Kontaktformular mit Feldern:
- Name
- E-Mail
- Telefon
- Dienstleistung (Dropdown)
- Nachricht

### Footer
Vollständiger Footer mit:
- Firmeninformationen
- Dienstleistungs-Links
- Wichtige Links
- Kontaktinformationen
- 24/7 Notdienst-Banner
- Social Media Links

## 🎨 Farbanpassung

Die Theme-Farben können in `assets/css/main.css` angepasst werden:

```css
:root {
    --primary-color: #FF6B35;      /* Orange - Hauptfarbe */
    --secondary-color: #004E89;    /* Blau - Sekundärfarbe */
    --accent-color: #F7931E;       /* Akzentfarbe */
    --dark-color: #1A1A2E;         /* Dunkel */
    --light-color: #F8F9FA;        /* Hell */
}
```

## 📱 Responsive Design

Das Theme ist vollständig responsive und optimiert für:
- Desktop (1200px+)
- Tablet (768px - 1199px)
- Mobile (bis 767px)

## 🔧 Empfohlene Plugins

### Für erweiterte Funktionen:
- **Contact Form 7**: Erweiterte Formulare
- **Yoast SEO**: SEO-Optimierung
- **WP Super Cache**: Performance
- **Wordfence Security**: Sicherheit

### Für Buchungen/Termine:
- **Bookly**: Terminbuchungssystem
- **WooCommerce**: Falls Sie Produkte verkaufen möchten

## 📂 Theme-Struktur

```
haushalt-reparatur/
├── assets/
│   ├── css/
│   │   └── main.css          # Haupt-Stylesheet
│   ├── js/
│   │   ├── main.js           # Haupt-JavaScript
│   │   └── customizer.js     # Customizer-Vorschau
│   └── images/
│       └── logo.svg          # Placeholder-Logo
├── inc/
│   ├── custom-header.php     # Custom Header
│   ├── customizer.php        # Customizer-Einstellungen
│   └── template-tags.php     # Template-Funktionen
├── template-parts/
│   └── hero-section.php      # Hero-Section
├── 404.php                   # 404-Fehlerseite
├── archive.php               # Archiv-Template
├── footer.php                # Footer
├── functions.php             # Theme-Funktionen
├── header.php                # Header
├── index.php                 # Haupttemplate
├── page.php                  # Seiten-Template
├── search.php                # Such-Template
├── searchform.php            # Suchformular
├── single.php                # Einzelbeitrag-Template
├── style.css                 # Theme-Info
├── screenshot.svg            # Theme-Screenshot
└── README.md                 # Dokumentation
```

## 🌐 Browser-Unterstützung

- Chrome (neueste 2 Versionen)
- Firefox (neueste 2 Versionen)
- Safari (neueste 2 Versionen)
- Edge (neueste 2 Versionen)
- Mobile Browser (iOS Safari, Chrome Mobile)

## 📞 Support & Anpassungen

Für Fragen oder individuelle Anpassungen:
- GitHub Issues: https://github.com/Black10998/PAX-HAUSHALT/issues
- Repository: https://github.com/Black10998/PAX-HAUSHALT

## 📝 Lizenz

GNU General Public License v2 or later
http://www.gnu.org/licenses/gpl-2.0.html

## ✅ Checkliste nach Installation

- [ ] Theme aktiviert
- [ ] Logo hochgeladen
- [ ] Kontaktinformationen angepasst
- [ ] Menüs erstellt und zugewiesen
- [ ] Seiten erstellt
- [ ] Startseite festgelegt
- [ ] Farben angepasst (optional)
- [ ] Empfohlene Plugins installiert
- [ ] Mobile Ansicht getestet
- [ ] Kontaktformular getestet

## 🎉 Fertig!

Ihr professionelles Haushalt-Reparatur-Service Theme ist jetzt einsatzbereit!
