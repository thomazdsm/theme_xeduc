<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * XEduc.
 *
 * @package    theme_xeduc
 * @copyright  2024 Thomaz Machado - https://xfera.tech
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'XEduc';
$string['configtitle'] = 'XEduc';
$string['choosereadme'] = 'XFera Tech EAD Moodle Theme';

$string['currentinparentheses'] = '(atual)';
$string['region-side-pre'] = 'Direito';
$string['prev_section'] = 'Seção anterior';
$string['next_section'] = 'Próxima seção';
$string['themedevelopedby'] = 'Este tema foi desenvolvido por';
$string['access'] = 'Acesso';
$string['prev_activity'] = 'Atividade anterior';
$string['next_activity'] = 'Próxima atividade';
$string['donthaveanaccount'] = 'Não tem uma conta?';
$string['signinwith'] = 'Entrar com';

// Aba de configurações gerais.
$string['generalsettings'] = 'Geral';
$string['logo'] = 'Logotipo';
$string['logodesc'] = 'O logotipo é exibido no cabeçalho.';
$string['favicon'] = 'Favicon personalizado';
$string['favicondesc'] = 'Carregue seu próprio favicon. Deve ser um arquivo .ico.';
$string['preset'] = 'Preset do tema';
$string['preset_desc'] = 'Escolha um preset para alterar amplamente o visual do tema.';
$string['presetfiles'] = 'Arquivos de preset adicionais do tema';
$string['presetfiles_desc'] = 'Os arquivos de preset podem ser usados para alterar drasticamente a aparência do tema. Consulte <a href="https://docs.moodle.org/dev/Boost_Presets">Preset do Boost</a> para obter informações sobre como criar e compartilhar seus próprios arquivos de preset.';
$string['loginbgimg'] = 'Fundo da página de login';
$string['loginbgimg_desc'] = 'Carregue sua imagem de fundo personalizada para a página de login.';
$string['brandcolor'] = 'Cor da marca';
$string['brandcolor_desc'] = 'A cor de destaque.';
$string['secondarymenucolor'] = 'Cor do menu secundário';
$string['secondarymenucolor_desc'] = 'Cor de fundo do menu secundário';
$string['navbarbg'] = 'Cor do Navbar';
$string['navbarbg_desc'] = 'A cor do Navbar à esquerda';
$string['navbarbghover'] = 'Cor de sobreposição do Navbar';
$string['navbarbghover_desc'] = 'A cor de sobreposição do Navbar à esquerda';
$string['fontsite'] = 'Fonte do site';
$string['fontsite_desc'] = 'Fonte padrão do site. Você pode experimentar as fontes no <a href="https://fonts.google.com">site do Google Fonts</a>.';
$string['enablecourseindex'] = 'Ativar índice do curso';
$string['enablecourseindex_desc'] = 'Você pode mostrar/ocultar a navegação do índice do curso';

// Aba de configurações avançadas.
$string['advancedsettings'] = 'Avançado';
$string['rawscsspre'] = 'SCSS inicial bruto';
$string['rawscsspre_desc'] = 'Neste campo, você pode fornecer código SCSS de inicialização, que será injetado antes de tudo. Na maioria das vezes, você usará essa configuração para definir variáveis.';
$string['rawscss'] = 'SCSS bruto';
$string['rawscss_desc'] = 'Use este campo para fornecer código SCSS ou CSS que será injetado no final da folha de estilo.';
$string['googleanalytics'] = 'Código do Google Analytics V4';
$string['googleanalyticsdesc'] = 'Digite seu código do Google Analytics V4 para habilitar a análise em seu site. O formato do código deve ser como [G-XXXXXXXXXX]';

// Aba de configurações da página inicial.
$string['frontpagesettings'] = 'Página inicial';
$string['displaymarketingboxes'] = 'Mostrar caixas de marketing na página inicial';
$string['displaymarketingboxesdesc'] = 'Se deseja ver as caixas, selecione sim <strong>e clique em SALVAR</strong> para carregar os campos de entrada.';
$string['marketingsectionheading'] = 'Título da seção de marketing';
$string['marketingsectioncontent'] = 'Conteúdo da seção de marketing';
$string['marketingicon'] = 'Ícone de marketing {$a}';
$string['marketingheading'] = 'Título de marketing {$a}';
$string['marketingcontent'] = 'Conteúdo de marketing {$a}';

$string['disableteacherspic'] = 'Desativar imagem dos professores';
$string['disableteacherspicdesc'] = 'Esta configuração oculta as imagens dos professores nos cartões dos cursos.';

$string['sliderfrontpageloggedin'] = 'Mostrar slideshow na página inicial após o login?';
$string['sliderfrontpageloggedindesc'] = 'Se habilitado, o slideshow será exibido na página inicial, substituindo a imagem do cabeçalho.';
$string['slidercount'] = 'Contagem do slide';
$string['slidercountdesc'] = 'Selecione quantos slides você deseja adicionar <strong>e clique em SALVAR</strong> para carregar os campos de entrada.';
$string['sliderimage'] = 'Imagem do slide';
$string['sliderimagedesc'] = 'Adicione uma imagem para seu slide. O tamanho recomendado é 1500px x 540px ou maior.';
$string['slidertitle'] = 'Título do slide';
$string['slidertitledesc'] = 'Adicione o título do slide.';
$string['slidercaption'] = 'Legenda do slide';
$string['slidercaptiondesc'] = 'Adicione uma legenda para seu slide';

$string['numbersfrontpage'] = 'Mostrar números do site';
$string['numbersfrontpagedesc'] = 'Se habilitado, exibe o número de usuários ativos e cursos na página inicial.';
$string['numbersfrontpagecontent'] = 'Conteúdo da seção de números';
$string['numbersfrontpagecontentdesc'] = 'Você pode adicionar qualquer texto ao lado esquerdo da seção de números';
$string['numbersfrontpagecontentdefault'] = '<h2>Confiado por mais de 25.000 clientes satisfeitos.</h2>
                    <p>Com muitos blocos exclusivos, você pode facilmente construir <br class="d-none d-sm-block d-md-none d-xl-block">
                        uma página sem programação. Construa seu próximo site <br class="d-none d-sm-block d-md-none d-xl-block">
                        em poucos minutos.</p>';
$string['numbersusers'] = 'Usuários ativos acessando nossos recursos incríveis';
$string['numberscourses'] = 'Cursos feitos para você que você pode confiar!';

$string['faq'] = 'FAQ';
$string['faqcount'] = 'Perguntas frequentes';
$string['faqcountdesc'] = 'Selecione quantas perguntas você deseja adicionar <strong>e clique em SALVAR</strong> para carregar os campos de entrada.<br>Se você não deseja um FAQ, selecione apenas 0.';
$string['faqquestion'] = 'Pergunta do FAQ {$a}';
$string['faqanswer'] = 'Resposta do FAQ {$a}';

// Aba de configurações do rodapé.
$string['footersettings'] = 'Rodapé';
$string['website'] = 'URL do site';
$string['websitedesc'] = 'Website principal da empresa';
$string['mobile'] = 'Celular';
$string['mobiledesc'] = 'Digite o número de celular. Ex: +5598912341234';
$string['mail'] = 'E-mail';
$string['maildesc'] = 'E-mail de suporte da empresa';
$string['facebook'] = 'URL do Facebook';
$string['facebookdesc'] = 'Digite a URL do seu Facebook. (por exemplo, http://www.facebook.com/minhainstituicao)';
$string['twitter'] = 'URL do Twitter';
$string['twitterdesc'] = 'Digite a URL do seu Twitter. (por exemplo, http://www.twitter.com/minhainstituicao)';
$string['linkedin'] = 'URL do Linkedin';
$string['linkedindesc'] = 'Digite a URL do seu Linkedin. (por exemplo, http://www.linkedin.com/minhainstituicao)';
$string['youtube'] = 'URL do Youtube';
$string['youtubedesc'] = 'Digite a URL do seu Youtube. (por exemplo, https://www.youtube.com/user/minhainstituicao)';
$string['instagram'] = 'URL do Instagram';
$string['instagramdesc'] = 'Digite a URL do seu Instagram. (por exemplo, https://www.instagram.com/minhainstituicao)';
$string['whatsapp'] = 'Número do Whatsapp';
$string['whatsappdesc'] = 'Digite seu número do Whatsapp para contato.';
$string['telegram'] = 'Telegram';
$string['telegramdesc'] = 'Digite seu contato ou link do grupo do Telegram.';
$string['contactus'] = 'Entre em contato conosco';
$string['followus'] = 'Siga-nos';

// Minha página pública.
$string['aboutme'] = 'Sobre mim';
$string['personalinformation'] = 'Informações pessoais';
$string['addcontact'] = 'Adicionar contato';
$string['removecontact'] = 'Remover contato';

// Configurações do tema.
$string['themesettings:accessibility'] = 'Acessibilidade';
$string['themesettings:fonttype'] = 'Tipo de fonte';
$string['themesettings:defaultfont'] = 'Fonte padrão';
$string['themesettings:dyslexicfont'] = 'Fonte para dislexia';
$string['themesettings:enableaccessibilitytoolbar'] = 'Habilitar barra de ferramentas de acessibilidade';
$string['themesettingg:successfullysaved'] = 'Configurações de acessibilidade salvas com sucesso';

// Recursos de acessibilidade.
$string['accessibility:fontsize'] = 'Tamanho da fonte';
$string['accessibility:decreasefont'] = 'Diminuir tamanho da fonte';
$string['accessibility:resetfont'] = 'Redefinir tamanho da fonte';
$string['accessibility:increasefont'] = 'Aumentar tamanho da fonte';
$string['accessibility:sitecolor'] = 'Cor do site';
$string['accessibility:resetsitecolor'] = 'Redefinir cor do site';
$string['accessibility:sitecolor2'] = 'Baixo contraste 1';
$string['accessibility:sitecolor3'] = 'Baixo contraste 2';
$string['accessibility:sitecolor4'] = 'Alto contraste';

// Privacidade de dados.
$string['privacy:metadata:preference:accessibilitystyles_fontsizeclass'] = 'A preferência do usuário para o tamanho da fonte.';
$string['privacy:metadata:preference:accessibilitystyles_sitecolorclass'] = 'A preferência do usuário para a cor do site.';
$string['privacy:metadata:preference:thememoovesettings_fonttype'] = 'A preferência do usuário para o tipo de fonte.';
$string['privacy:metadata:preference:thememoovesettings_enableaccessibilitytoolbar'] = 'A preferência do usuário para habilitar a barra de ferramentas de acessibilidade.';

$string['privacy:accessibilitystyles_fontsizeclass'] = 'A preferência atual para o tamanho da fonte é: {$a}.';
$string['privacy:accessibilitystyles_sitecolorclass'] = 'A preferência atual para a cor do site é: {$a}.';
$string['privacy:thememoovesettings_fonttype'] = 'A preferência atual para o tipo de fonte é: {$a}.';
$string['privacy:thememoovesettings_enableaccessibilitytoolbar'] = 'A preferência atual para habilitar a barra de ferramentas de acessibilidade é mostrá-la.';
