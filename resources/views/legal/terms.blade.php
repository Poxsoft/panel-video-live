<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challengo Terms of Use</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Configuración opcional de Tailwind para mejor diseño -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        transparent: '#00000000',
                        white: '#FFFFFF',
                        black: '#000000',
                        primary: '#FF0095', // darkOrange - Usado para títulos y botones
                        secondary: '#FF43C0', // lightOrange - Usado para elementos destacados
                        grey: '#909090',
                        grey2: '#9C9C9C',
                        davyGrey: '#595959',
                        lightGrey3: '#ECECEC',
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-lightGrey3 text-davyGrey">

    <!-- Selector de Idioma Fijo -->
    <!-- <header class="fixed top-0 left-0 right-0 bg-white shadow z-50">
        <div class="container mx-auto px-4 py-3 flex justify-center">
            <div class="relative inline-block">
                <button id="dropdown-button" class="flex items-center bg-white border border-gray-300 text-davyGrey rounded-lg px-4 py-2 shadow-lg focus:outline-none focus:ring-2 focus:ring-primary" onclick="toggleDropdown()">
                    <img id="selected-flag" src="https://flagcdn.com/us.svg" alt="Selected Language" class="w-6 h-4 mr-2">
                    <span id="selected-language">English</span>
                </button>
                <div id="dropdown-menu" class="hidden absolute bg-white border border-gray-300 rounded-lg mt-1 shadow-lg z-50">
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('en', 'https://flagcdn.com/us.svg', 'English')">
                        <img src="https://flagcdn.com/us.svg" alt="English" class="w-6 h-4 mr-2"> English
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('es', 'https://flagcdn.com/es.svg', 'Spanish')">
                        <img src="https://flagcdn.com/es.svg" alt="Spanish" class="w-6 h-4 mr-2"> Spanish
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('ar', 'https://flagcdn.com/ae.svg', 'Arabic')">
                        <img src="https://flagcdn.com/ae.svg" alt="Arabic" class="w-6 h-4 mr-2"> Arabic
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('da', 'https://flagcdn.com/dk.svg', 'Danish')">
                        <img src="https://flagcdn.com/dk.svg" alt="Danish" class="w-6 h-4 mr-2"> Danish
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('de', 'https://flagcdn.com/de.svg', 'German')">
                        <img src="https://flagcdn.com/de.svg" alt="German" class="w-6 h-4 mr-2"> German
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('el', 'https://flagcdn.com/gr.svg', 'Greek')">
                        <img src="https://flagcdn.com/gr.svg" alt="Greek" class="w-6 h-4 mr-2"> Greek
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('fr', 'https://flagcdn.com/fr.svg', 'French')">
                        <img src="https://flagcdn.com/fr.svg" alt="French" class="w-6 h-4 mr-2"> French
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('hi', 'https://flagcdn.com/in.svg', 'Hindi')">
                        <img src="https://flagcdn.com/in.svg" alt="Hindi" class="w-6 h-4 mr-2"> Hindi
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('id', 'https://flagcdn.com/id.svg', 'Indonesian')">
                        <img src="https://flagcdn.com/id.svg" alt="Indonesian" class="w-6 h-4 mr-2"> Indonesian
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('it', 'https://flagcdn.com/it.svg', 'Italian')">
                        <img src="https://flagcdn.com/it.svg" alt="Italian" class="w-6 h-4 mr-2"> Italian
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('ja', 'https://flagcdn.com/jp.svg', 'Japanese')">
                        <img src="https://flagcdn.com/jp.svg" alt="Japanese" class="w-6 h-4 mr-2"> Japanese
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('ko', 'https://flagcdn.com/kr.svg', 'Korean')">
                        <img src="https://flagcdn.com/kr.svg" alt="Korean" class="w-6 h-4 mr-2"> Korean
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('nb', 'https://flagcdn.com/no.svg', 'Norwegian')">
                        <img src="https://flagcdn.com/no.svg" alt="Norwegian" class="w-6 h-4 mr-2"> Norwegian
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('nl', 'https://flagcdn.com/nl.svg', 'Dutch')">
                        <img src="https://flagcdn.com/nl.svg" alt="Dutch" class="w-6 h-4 mr-2"> Dutch
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('pl', 'https://flagcdn.com/pl.svg', 'Polish')">
                        <img src="https://flagcdn.com/pl.svg" alt="Polish" class="w-6 h-4 mr-2"> Polish
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('pt', 'https://flagcdn.com/pt.svg', 'Portuguese')">
                        <img src="https://flagcdn.com/pt.svg" alt="Portuguese" class="w-6 h-4 mr-2"> Portuguese
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('ru', 'https://flagcdn.com/ru.svg', 'Russian')">
                        <img src="https://flagcdn.com/ru.svg" alt="Russian" class="w-6 h-4 mr-2"> Russian
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('sv', 'https://flagcdn.com/se.svg', 'Swedish')">
                        <img src="https://flagcdn.com/se.svg" alt="Swedish" class="w-6 h-4 mr-2"> Swedish
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('th', 'https://flagcdn.com/th.svg', 'Thai')">
                        <img src="https://flagcdn.com/th.svg" alt="Thai" class="w-6 h-4 mr-2"> Thai
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('vi', 'https://flagcdn.com/vn.svg', 'Vietnamese')">
                        <img src="https://flagcdn.com/vn.svg" alt="Vietnamese" class="w-6 h-4 mr-2"> Vietnamese
                    </div>
                    <div class="cursor-pointer flex items-center hover:bg-gray-200" onclick="selectLanguage('zh', 'https://flagcdn.com/cn.svg', 'Chinese')">
                        <img src="https://flagcdn.com/cn.svg" alt="Chinese" class="w-6 h-4 mr-2"> Chinese
                    </div>
                </div>
            </div>
        </div>
    </header> -->

    <!-- Contenido de la Política de Privacidad -->
    <main class="container mx-auto px-4 py-10">
        <div id="privacy-policy" class="space-y-6">
            <!-- Las secciones de la política de privacidad serán inyectadas aquí por JavaScript -->
        </div>
    </main>

    <!-- JavaScript para Importar y Cargar el JSON -->
    <script>
        let privacyPolicy = {};

        async function loadPrivacyPolicy() {
            try {
                const response = await fetch('./terms.json');
                if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
                privacyPolicy = await response.json();
                switchLanguage('en'); // Idioma por defecto
            } catch (error) {
                console.error('Error al cargar la política de privacidad:', error);
                document.getElementById('privacy-policy').innerHTML = '<p class="text-red-500">No se pudo cargar la política de privacidad. Por favor, inténtalo de nuevo más tarde.</p>';
            }
        }

        function switchLanguage(lang) {
            const policyContainer = document.getElementById('privacy-policy');
            policyContainer.innerHTML = '';
            const sections = privacyPolicy[lang].sections;

            sections.forEach(section => {
                const card = document.createElement('div');
                card.className = 'bg-white shadow-lg rounded-lg p-6 mb-6';

                if (section.title) {
                    const titleBox = document.createElement('div');
                    titleBox.className = 'bg-primary text-white px-4 py-2 rounded mb-4';
                    titleBox.innerHTML = `<h2 class="text-xl font-semibold">${section.title}</h2>`;
                    card.appendChild(titleBox);
                }

                const contentDiv = document.createElement('div');
                contentDiv.className = 'text-justify text-davyGrey';
                contentDiv.innerHTML = section.content;
                card.appendChild(contentDiv);

                policyContainer.appendChild(card);
            });
        }

        function toggleDropdown() {
            document.getElementById('dropdown-menu').classList.toggle('hidden');
        }

        function selectLanguage(lang, flagUrl, languageName) {
            document.getElementById('selected-flag').src = flagUrl;
            document.getElementById('selected-language').textContent = languageName;
            toggleDropdown();
            switchLanguage(lang);
        }

        window.onclick = function(event) {
            if (!event.target.closest('#dropdown-button') && !event.target.closest('#dropdown-menu')) {
                document.getElementById('dropdown-menu').classList.add('hidden');
            }
        };

        document.addEventListener('DOMContentLoaded', loadPrivacyPolicy);
    </script>

</body>
</html>
