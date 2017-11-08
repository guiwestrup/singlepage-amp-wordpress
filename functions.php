<?php 

// Início do template para AMP
    define( 'AMP_QUERY_VAR', apply_filters( 'amp_query_var', 'amp' ) );
    add_rewrite_endpoint( AMP_QUERY_VAR, EP_PERMALINK );
    add_filter( 'template_include', 'amp_page_template', 99 );
    function amp_page_template( $template ) {
        if( get_query_var( AMP_QUERY_VAR, false ) !== false ) {
            if ( is_single() ) {
                $template = get_template_directory() .  '/amp-single.php';
            } 
        }
        return $template;
    }
// Fim do template para AMP
//Função para limpar as tags html do content
function limpa_amp($amp)
{

    $retorno = strip_tags($amp, '<p><img><a>');
    $retorno = str_replace('<img', '<amp-img layout="responsive"', $retorno);
    return nl2p($retorno);
} 
//Converte quebra de linhas em parágrafos
function nl2p($string, $line_breaks = false, $xml = true) {
    $string = str_replace(array('<p>', '</p>', '<br>', '<br />'), '', $string);
    if ($line_breaks == true)
        return '<p>'.preg_replace(array("/([\n]{2,})/i", "/([^>])\n([^<])/i"), array("</p>\n<p>", '$1<br'.($xml == true ? ' /' : '').'>$2'), trim($string)).'</p>';
    else 
        return '<p>'.preg_replace(
        array("/([\n]{2,})/i", "/([\r\n]{3,})/i","/([^>])\n([^<])/i"),
        array("</p>\n<p>", "</p>\n<p>", '$1<br'.($xml == true ? ' /' : '').'>$2'),
        trim($string)).'</p>'; 
    }
// Fim da função nl2p()