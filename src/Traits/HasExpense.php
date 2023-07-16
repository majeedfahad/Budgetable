<?php

namespace Majeedfahad\Budgetable\Traits;

use Majeedfahad\Budgetable\Models\FinancialExpense;
use Illuminate\Database\Eloquent\Relations\MorphOne;
trait HasExpense
{
    public function expense(): MorphOne
    {
        return $this->morphOne(FinancialExpense::class, 'expensable');
    }
}
