<?php

use Majeedfahad\Budgetable\Models\FinancialBudget;
trait HasBudget
{
    public function financialBudget()
    {
        return $this->morphMany(FinancialBudget::class, 'budgetable');
    }
}
