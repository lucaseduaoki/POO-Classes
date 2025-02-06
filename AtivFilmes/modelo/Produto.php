<?php 

abstract class Produto{
    protected int $id;
    protected string $tipo; /*F ou S (Filme ou Série)*/
    protected string $nome;
    protected string $dataLanc;
    protected int $classIndicativa;
    protected string $diretor;
    protected string $genero;
    protected string $adptLivro;
    protected string $dispoWeb;



    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of dataLanc
     */
    public function getDataLanc(): string
    {
        return $this->dataLanc;
    }

    /**
     * Set the value of dataLanc
     */
    public function setDataLanc(string $dataLanc): self
    {
        $this->dataLanc = $dataLanc;

        return $this;
    }

    /**
     * Get the value of classIndicativa
     */
    public function getClassIndicativa(): int
    {
        return $this->classIndicativa;
    }

    /**
     * Set the value of classIndicativa
     */
    public function setClassIndicativa(int $classIndicativa): self
    {
        $this->classIndicativa = $classIndicativa;

        return $this;
    }

    /**
     * Get the value of diretor
     */
    public function getDiretor(): string
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     */
    public function setDiretor(string $diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero(): string
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of adptLivro
     */
    public function getAdptLivro(): string
    {
        return $this->adptLivro;
    }

    /**
     * Set the value of adptLivro
     */
    public function setAdptLivro(string $adptLivro): self
    {
        $this->adptLivro = $adptLivro;

        return $this;
    }

    /**
     * Get the value of dispoWeb
     */
    public function getDispoWeb(): string
    {
        return $this->dispoWeb;
    }

    /**
     * Set the value of dispoWeb
     */
    public function setDispoWeb(string $dispoWeb): self
    {
        $this->dispoWeb = $dispoWeb;

        return $this;
    }
}
