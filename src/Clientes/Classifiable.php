<?php
namespace Clientes;
/**
 * Interface Classifiable
 * 
 * Interface para dar notas a objetos
 */
interface Classifiable
{
    /**
     * Nota de 0 a 5
     * 
     * @param int $rating
     */
    public function setRating($rating);
}
