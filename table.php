<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link id="theme-link" rel="stylesheet" type="text/css" href="style/style_table.css">
    <script type="text/javascript">
        function setDynCSS(url) {
            if (!arguments.length) {
                url = (url = document.cookie.match(/\btheme-link=([^;]*)/)) && url[1];
                if (!url) url = 'style/style_table1.css';
            }
            else {
                var d = new Date();
                d.setFullYear(d.getFullYear() + 1);
                document.cookie = ['theme-link=', url, ';expires=', d.toGMTString(), ';path=/;'].join('');
            }
            document.getElementById('theme-link').href = url;
        }
    </script>
    <title>Таблица менделева</title>
</head>
<body>
<?php
echo "<ul>\n";
echo "        <li><a class=\"lif\" href=\"Index.php\">Главная</a></li>\n";
echo "    <li><a class=\"lif\" href=\"#\">Домашка</a>\n";
echo "        <ul>\n";
echo "            <li><a class=\"lif\" href=\"DZ1.php\">Git merge conflict</a></li>\n";
echo "            <li><a class=\"lif\" href=\"table.php\">Таблица Менделеева</a></li>\n";
echo "            <li><a class=\"lif\" href=\"Function.php\">DZ 26.11.21</a></li>\n";
echo "        </ul>\n";
echo "    </li>\n";
echo "    <li><a class=\"lif\" href=\"#\">Характеристика курса</a></li>\n";
echo "    <li><a class=\"lif\" href=\"#\">Контакты</a></li>\n";
echo "    <img style=\"cursor: pointer; border-radius: 10px; width=\"50\" height=\"50\"\" src=\"img/img2/sons.png\" onclick=\"setDynCSS('style/style_table.css')\"></a></li>\n";
echo "    <img style=\"cursor:pointer; border-radius: 10px; width=\"50\" height=\"50\"\" src=\"img/nightmodeoff.png\" onclick=\"setDynCSS('style/style_table1.css')\"></a></li>\n";
echo "</ul>\n";
echo "<main>\n";
echo "  <table>\n";
echo "    <caption>Таблица Менделеева</caption>\n";
echo "    <tr>\n";
echo "      <th rowspan=\"2\">Периоды</th>\n";
echo "      <th rowspan=\"2\">Ряды</th>\n";
echo "      <th colspan=\"4\">Группы элементов</th>\n";
echo "    </tr>\n";
echo "    <tr>\n";
echo "      <th>&#8544;</th>\n";
echo "      <th>&#8545;</th>\n";
echo "      <th>&#8546;</th>\n";
echo "      <th>&#8547;</th>\n";
echo "    </tr>\n";
echo "    <tr>\n";
echo "      <td class=\"period\">&#8545;</td>\n";
echo "      <td class=\"line\">2</td>\n";
echo "      <td class=\"chem_element bright_red\">\n";
echo "      <a href=\"https://ru.wikipedia.org/wiki/Литий\" title=\"Литий\" target=\"_blank\">\n";
echo "        <div class=\"element_cell\">\n";
echo "          <span class=\"element_symbol\">Li</span>\n";
echo "          <span class=\"element_number\">3</span>\n";
echo "          <span class=\"element_mass\">6,939</span>\n";
echo "          <span class=\"element_name\">Литий</span>\n";
echo "        </div>\n";
echo "      </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element bright_red\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Бериллий\" title=\"Бериллий\" target=\"_blank\">\n";
echo "          <div class=\"element_cell\">\n";
echo "            <span class=\"element_symbol\">Be</span>\n";
echo "            <span class=\"element_number\">4</span>\n";
echo "            <span class=\"element_mass\">9,0122</span>\n";
echo "            <span class=\"element_name\">Берилий</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element yellow\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Бор_(элемент)\" title=\"Бор\" target=\"_blank\">\n";
echo "          <div class=\"element_cell\">\n";
echo "            <span class=\"element_symbol\">B</span>\n";
echo "            <span class=\"element_number\">5</span>\n";
echo "            <span class=\"element_mass\">10,811</span>\n";
echo "            <span class=\"element_name\">Бор</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element yellow\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Углерод\" title=\"Углерод\" target=\"_blank\">\n";
echo "          <div class=\"element_cell\">\n";
echo "            <span class=\"element_symbol\">C</span>\n";
echo "            <span class=\"element_number\">6</span>\n";
echo "            <span class=\"element_mass\">12,01115</span>\n";
echo "            <span class=\"element_name\">Углерод</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "    </tr>\n";
echo "    <tr><tr>\n";
echo "      <td class=\"period\">&#8546;</td>\n";
echo "      <td class=\"line\">3</td>\n";
echo "      <td class=\"chem_element bright_red\">\n";
echo "      <a href=\"https://ru.wikipedia.org/wiki/Натрий\" title=\"Натрий\" target=\"_blank\">\n";
echo "        <div class=\"element_cell\">\n";
echo "          <span class=\"element_symbol\">Na</span>\n";
echo "          <span class=\"element_number\">11</span>\n";
echo "          <span class=\"element_mass\">22,9898</span>\n";
echo "          <span class=\"element_name\">Натрий</span>\n";
echo "        </div>\n";
echo "      </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element bright_red\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Магний\" title=\"Магний\" target=\"_blank\">\n";
echo "          <div class=\"element_cell\">\n";
echo "            <span class=\"element_symbol\">Mg</span>\n";
echo "            <span class=\"element_number\">12</span>\n";
echo "            <span class=\"element_mass\">24,305</span>\n";
echo "            <span class=\"element_name\">Магний</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element yellow\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Алюминий\" title=\"Алюминий\" target=\"_blank\">\n";
echo "          <div class=\"element_cell\">\n";
echo "            <span class=\"element_symbol\">Al</span>\n";
echo "            <span class=\"element_number\">13</span>\n";
echo "            <span class=\"element_mass\">26,9815</span>\n";
echo "            <span class=\"element_name\">Алюминий</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element yellow\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Кремний\" title=\"Кремний\" target=\"_blank\">\n";
echo "          <div class=\"element_cell\">\n";
echo "            <span class=\"element_symbol\">Si</span>\n";
echo "            <span class=\"element_number\">14</span>\n";
echo "            <span class=\"element_mass\">28,086</span>\n";
echo "            <span class=\"element_name\">Кремний</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "    </tr>\n";
echo "    <tr>\n";
echo "      <td class=\"period\" rowspan=\"2\">&#8547;</td>\n";
echo "      <td class=\"line\">4</td>\n";
echo "      <td class=\"chem_element bright_red\">\n";
echo "      <a href=\"https://ru.wikipedia.org/wiki/Калий\" title=\"Калий\" target=\"_blank\">\n";
echo "        <div class=\"element_cell\">\n";
echo "          <span class=\"element_symbol\">K</span>\n";
echo "          <span class=\"element_number\">19</span>\n";
echo "          <span class=\"element_mass\">39,102</span>\n";
echo "          <span class=\"element_name\">Калий</span>\n";
echo "        </div>\n";
echo "      </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element bright_red\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Кальций\" title=\"Кальций\" target=\"_blank\">\n";
echo "          <div class=\"element_cell\">\n";
echo "            <span class=\"element_symbol\">Ca</span>\n";
echo "            <span class=\"element_number\">20</span>\n";
echo "            <span class=\"element_mass\">40,08</span>\n";
echo "            <span class=\"element_name\">Кальций</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element bright_blue\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Скандий\" title=\"Скандий\" target=\"_blank\">\n";
echo "          <div class=\"element_cell_reflect\">\n";
echo "            <span class=\"element_symbol\">Sc</span>\n";
echo "            <span class=\"element_number\">21</span>\n";
echo "            <span class=\"element_mass\">44,956</span>\n";
echo "            <span class=\"element_name\">Скандий</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element bright_blue\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Титан_(элемент)\" title=\"Титан\" target=\"_blank\">\n";
echo "          <div class=\"element_cell_reflect\">\n";
echo "            <span class=\"element_symbol\">Ti</span>\n";
echo "            <span class=\"element_number\">22</span>\n";
echo "            <span class=\"element_mass\">47,90</span>\n";
echo "            <span class=\"element_name\">Титан</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "    </tr>\n";
echo "    <tr>\n";
echo "      <td class=\"line\">5</td>\n";
echo "      <td class=\"chem_element bright_blue\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Медь\" title=\"Медь\" target=\"_blank\">\n";
echo "          <div class=\"element_cell_reflect\">\n";
echo "            <span class=\"element_symbol\">Cu</span>\n";
echo "            <span class=\"element_number\">29</span>\n";
echo "            <span class=\"element_mass\">63,546</span>\n";
echo "            <span class=\"element_name\">Медь</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element bright_blue\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Цинк\" title=\"Цинк\" target=\"_blank\">\n";
echo "          <div class=\"element_cell_reflect\">\n";
echo "            <span class=\"element_symbol\">Zn</span>\n";
echo "            <span class=\"element_number\">30</span>\n";
echo "            <span class=\"element_mass\">25,37</span>\n";
echo "            <span class=\"element_name\">Цинк</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element yellow\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Галлий\" title=\"Галлий\" target=\"_blank\">\n";
echo "          <div class=\"element_cell\">\n";
echo "            <span class=\"element_symbol\">Ga</span>\n";
echo "            <span class=\"element_number\">31</span>\n";
echo "            <span class=\"element_mass\">69,72</span>\n";
echo "            <span class=\"element_name\">Галлий</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "      <td class=\"chem_element yellow\">\n";
echo "        <a href=\"https://ru.wikipedia.org/wiki/Германий\" title=\"Германий\" target=\"_blank\">\n";
echo "          <div class=\"element_cell\">\n";
echo "            <span class=\"element_symbol\">Ge</span>\n";
echo "            <span class=\"element_number\">32</span>\n";
echo "            <span class=\"element_mass\">72,59</span>\n";
echo "            <span class=\"element_name\">Германий</span>\n";
echo "          </div>\n";
echo "        </a>\n";
echo "      </td>\n";
echo "    </tr>\n";
echo "  </table>\n";
echo "</main>\n";
echo "</body>\n";
echo "</html>\n";
?>