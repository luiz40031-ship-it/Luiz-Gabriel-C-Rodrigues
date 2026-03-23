<?php
class Livros{
    public $titulo;
    public $autor;
    public $numerodepaginas;
    public $anodepublicacao;
}
    $harrypotter = new Livros;
    $itacoisa = new Livros;
    $omagicodeoz = new Livros;

$harrypotter-> titulo="A Pedra Filosofal";
$harrypotter-> autor="J.K Rowling";
$harrypotter-> numerodepaginas="260";
$harrypotter-> anodepublicacao="1997";

 $itacoisa-> titulo="It a Coisa";
 $itacoisa-> autor="Stephen King";
 $itacoisa-> numerodepaginas="1104";
 $itacoisa-> anodepublicacao="1986";
 
 $omagicodeoz-> titulo="O Magico de Oz";
 $omagicodeoz-> autor="Frank Baum";
 $omagicodeoz-> numerodepaginas="200";
 $omagicodeoz-> anodepublicacao="1900";
  
echo "Livro: " . $harrypotter->titulo . "<br>";
echo "Autor: " . $harrypotter->autor . "<br>";
echo "Páginas: " . $harrypotter->numerodepaginas . "<br>";
echo "Ano de Pùblicação: " . $harrypotter->anodepublicacao . "<br><br>";

echo "Livro: " . $itacoisa->titulo . "<br>";
echo "Autor: " . $itacoisa->autor . "<br>";
echo "Páginas: " . $itacoisa->numerodepaginas . "<br>";
echo "Ano de Publicação: " . $itacoisa->anodepublicacao . "<br><br>";

echo "Livro: " . $omagicodeoz->titulo . "<br>";
echo "Autor: " . $omagicodeoz->autor . "<br>";
echo "Páginas: " . $omagicodeoz->numerodepaginas . "<br>";
echo "Ano de Publicação: " . $omagicodeoz->anodepublicacao . "<br>";








?>