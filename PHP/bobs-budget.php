<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$weeklyExpenses = [
    "gas" => 25,
    "food" => 90,
    "entertainment" => 47
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Calculating Net Income
$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1])
           + ($incomeSegments[1][0] * $incomeSegments[1][1])
           + ($incomeSegments[2][0] * $incomeSegments[2][1]);
$netIncome -= $socialSecurity;

// Calculating Annual Income
$annualIncome = $netIncome;
echo "Annual income before deducting annual expenses: \n${annualIncome}\n";

$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];
echo "Annual income after deducting annual expenses: \n${annualIncome}\n";

// Calculating Monthly Income
$monthsPerYear = 12;
$monthlyIncome = $annualIncome / $monthsPerYear;;
echo "Monthly income before expenses: \n${monthlyIncome}\n";

$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];
echo "Monthly Income after expenses: \n${monthlyIncome}\n";

// Calculating Weekly Income
$averageWeeksPerMonth = 4.33;
$weeklyIncome = $monthlyIncome / $averageWeeksPerMonth;
echo "Weekly income before expenses: \n${weeklyIncome}\n";

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];
echo "Weekly income after expenses: \n${weeklyIncome}\n";

// Calculating Savings per year
$weeksPerYear = 52;
$yearlySavings = $weeklyIncome * $weeksPerYear;
echo "Remaining income per year amounts to: ${yearlySavings}";