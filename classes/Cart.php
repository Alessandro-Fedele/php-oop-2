<?php
class Cart
{
    protected $cart = [];

    // Funzione per aggiungere Prodotti al carrello 
    public function addToCart($newProduct)
    {
        $this->cart[] = $newProduct;
    }
    // Funzione per rimuovere Prodotti dal carrello
    public function removeFormCart($newProduct)
    {
        // Cerco il prodotto da cancellare e se esiste lo cancello dall'array
    }
}
