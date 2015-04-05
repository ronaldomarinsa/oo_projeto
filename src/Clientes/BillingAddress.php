<?php
namespace Clientes;
/**
 * Interface BillingAddress
 *
 * Interface para endereço de cobrança
 */
interface BillingAddress
{
    /**
     * Seta o endereço de cobrança
     *
     * @param string $billingAddress
     */
    public function setBillingAddress($billingAddress);

    /**
     * Retorna o endereço de cobrança
     *
     * @return string
     */
    public function getBillingAddress();

    /**
     * Verifica se tem endereço de cobrança
     *
     * @return bool
     */
    public function hasBillingAddress();
}
