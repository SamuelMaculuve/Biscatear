@extends('layouts.BaseLayout')

@section('content')
<!-- Header Section End -->

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Conte-nos do que você precisa
                        <div class="breadcrumb__links">
                            <span>                            Entre em contato com freelancers qualificados dentro de poucos minutos. Veja perfis, avaliações, portfólios e converse com eles. Pague apenas quando estiver 100% satisfeito com o trabalho.</h2>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__content">
                    <form action="#">
                        <div class="input__item">
                            <p>Escolha um nome para o seu projeto
                            </p>
                            <input type="text">
                        </div>
                        <div class="input__item">
                            <p>Dê mais detalhes sobre o seu projeto</p>
                            <span>Start with a bit about yourself or your business, and include an overview of what you need done</span>
                            <textarea></textarea>
                        </div>
                        <div class="input__item">
                            <p>Quais as habilidades necessárias?</p>
                            <span>Start with a bit about yourself or your business, and include an overview of what you need done</span>
                            <input type="text">
                        </div>
                        <div class="input__item">
                            <p>Como você quer pagar?<p/>
                            <input type="text">
                        </div>
                        <div class="input__item">
                            <p>Qual é seu orçamento estimado?<p/>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-step-fieldContainer">
                                        <label for="project-budget" class="is-accessibly-hidden" i18n-id="c1c17a072cf7fbf88a4ee948da48c8b0" i18n-msg="Budget Range">Intervalo do Orçamento</label>
                                        <select id="project-currency" name="currency" class="large-input focusable-field PagePostProject--selectIE ng-pristine ng-valid ng-touched" ng-model="BudgetSelector.projectData.selectedCurrency" ng-change="BudgetSelector.onCurrencyChange()" ng-options="currency as currency.code for currency in BudgetSelector.currencyData track by currency.id" fl-focus-in-tracker="Project_Currency" fl-focus-out-tracker="Project_Currency" fl-toggle-wizard-next="estimatedBudget" fl-autosave-draft=""><option value="3" selected="selected" label="AUD">AUD</option><option value="9" label="CAD">CAD</option><option value="8" selected="selected" label="EUR">EUR</option><option value="4" label="GBP">GBP</option><option value="5" label="HKD">HKD</option><option value="11" label="INR">INR</option><option value="2" label="NZD">NZD</option><option value="6" label="SGD">SGD</option><option value="1" label="USD">USD</option></select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-step-fieldContainer">
                                        <label for="project-budget" class="is-accessibly-hidden" i18n-id="c1c17a072cf7fbf88a4ee948da48c8b0" i18n-msg="Budget Range">Intervalo do Orçamento</label>
                                        <select id="project-budget" name="budget" class="large-input focusable-field PagePostProject--selectIE ng-pristine ng-untouched ng-valid" ng-model="BudgetSelector.projectData.selectedBudget" ng-options="budget as budget.displayName for budget in BudgetSelector.budgetData track by budget.id" ng-change="BudgetSelector.onBudgetChange()" fl-focus-in-tracker="Project_Budget" fl-focus-out-tracker="Project_Budget" fl-toggle-wizard-next="estimatedBudget" fl-autosave-draft=""><option value="195" selected="selected" label="Micro Projeto (€8 - 30 EUR) ">Micro Projeto (€8 - 30 EUR) </option><option value="43" label="Projeto simples (€30 - 250 EUR) ">Projeto simples (€30 - 250 EUR) </option><option value="44" selected="selected" label="Projeto muito pequeno (€250 - 750 EUR) ">Projeto muito pequeno (€250 - 750 EUR) </option><option value="45" label="Projeto pequeno (€750 - 1500 EUR) ">Projeto pequeno (€750 - 1500 EUR) </option><option value="46" label="Projeto médio (€1500 - 3000 EUR) ">Projeto médio (€1500 - 3000 EUR) </option><option value="47" label="Projeto grande (€3000 - 5000 EUR) ">Projeto grande (€3000 - 5000 EUR) </option><option value="48" label="Projeto maior (€5000 - 10000 EUR) ">Projeto maior (€5000 - 10000 EUR) </option><option value="236" label="Projeto muito grande (€10000 - 20000 EUR) ">Projeto muito grande (€10000 - 20000 EUR) </option><option value="255" label="Projeto enorme (€20000 - 50000 EUR) ">Projeto enorme (€20000 - 50000 EUR) </option><option value="274" label="Projeto importante (€50000 +  EUR) ">Projeto importante (€50000 +  EUR) </option><option value="custom" label="Personalizar orçamento">Personalizar orçamento</option></select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="site-btn">Submit Form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection
