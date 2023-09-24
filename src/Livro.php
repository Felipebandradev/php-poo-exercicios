<?php 

class Livro{
    private string $titulo;
    private string $autor;
    private string $capa;
    private int  $paginas = 0;
    private string $link;

    public function __construct(string $titulo, string $autor,string $capa, int $paginas, string $link)
    {
        $this->titulo  = $titulo;
        $this->autor   = $autor;
        $this->capa    = $capa;
        $this->paginas = $paginas;
        $this->link    =  $link;

    }


    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setAutor(string $autor): void
    {
        $this->autor = $autor;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setCapa(string $capa): void
    {
        $this->capa = $capa;
    } 

    public function getCapa(): string
    {
        return $this->capa;
    }

    public function setPaginas(int $paginas): void
    {
        $this->paginas = $paginas;
    }

    public function getPaginas(): int
    {
        return $this->paginas;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getLink() : string
    {
        return $this->link;
    }
}