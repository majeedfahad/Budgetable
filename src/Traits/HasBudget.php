<?php

namespace Majeedfahad\Budgetable\Traits;

use Majeedfahad\Budgetable\Models\FinancialBudget;
trait HasBudget
{
    public function financialBudget()
    {
        return $this->morphOne(FinancialBudget::class, 'budgetable');
    }
}
