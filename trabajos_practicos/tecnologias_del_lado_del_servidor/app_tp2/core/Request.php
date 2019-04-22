<?php

class Request
{
    public function __construct()
    {
        $this->scheme = $this->buildScheme();
        $this->body = $_POST;
        $this->method = $_SERVER["REQUEST_METHOD"];
        $this->path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $this->query = parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY);
        $this->data = $this->buildData(); // Falta FILES
    }

    private function buildScheme()
    {
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
    }

    private function buildData()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            return $this->buildGetData();
        }
        return $this->buildPostData();
    }

    private function buildGetData()
    {
        parse_str($this->query, $query_array);
        return $query_array;
    }

    private function buildPostData()
    {
        return $_POST;
    }

    /**
     * Funcion que consulta si se envio un dato por GET o POST con la clave dada
     * Si no lo encuentra devuelve null o el valor por default proporcionado
     */
    public function input($clave, $default = null)
    {
        return array_key_exists($clave, $this->data) ? $this->data : $default ;
    }

    public function getUrl()
    {
        return trim($this->path, '/');
    }
}
