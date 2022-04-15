<?php
class usuari
{
    private string $usuari;
    private array $pagines;

    /**
     * @param string $usuari
     */
    public function __construct(string $usuari)
    {
        $this->usuari = $usuari;
        $this->pagines = array();
    }

    /**
     * @return string
     */
    public function getUsuari(): string
    {
        return $this->usuari;
    }

    /**
     * @param string $usuari
     */
    public function setUsuari(string $usuari): void
    {
        $this->usuari = $usuari;
    }

    /**
     * @return array()
     */
    public function getPagines(): array
    {
        return $this->pagines;
    }

    /**
     * @param string $pagines
     */
    public function setPagines(string $pagines): void
    {
        $this->pagines[] = $pagines;
    }

    public function printPagines(): void
    {
        echo '<table class="table align-items-center text-center"><thead class="thead-dark"><tr><th>Historial</th></tr></thead>';
        foreach ($this->pagines as $page) {
            echo '<tbody><tr><td>'.$page.'</td></tr></tbody>';
        }
        echo '</table>';
    }
}