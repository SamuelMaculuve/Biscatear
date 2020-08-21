@extends('layouts.BaseLayoutDashboard')

@section('content')
<!-- Header Section End -->


@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <p>Conte-nos do que você precisa</p>
                        <div class="breadcrumb__links">
                            <span>
                                <p>Entre em contato com freelancers qualificados dentro de poucos minutos. Veja perfis, avaliações, portfólios e converse com eles. Pague apenas quando estiver 100% satisfeito com o trabalho.</p>
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
                    <form name='submeter'action="{{route('project.store')}}" method="post">
                        @csrf
                        <div class="input__item">
                            <p>Escolha um nome para o seu projeto
                            </p>
                            <input type="text" name="nome">
                        </div>
                        <div class="input__item">
                            <p>Dê mais detalhes sobre o seu projeto</p>
                            <span>Start with a bit about yourself or your business, and include an overview of what you need done</span>
                            <textarea name="descricao"></textarea>
                        </div>
                        <div class="col-4">
                            <div class="form-step-fieldContainer">
                                <label for="project-budget" class="is-accessibly-hidden" i18n-id="c1c17a072cf7fbf88a4ee948da48c8b0" i18n-msg="Budget Range">Area de Trabalho</label>
                                <select id="project-currency" name="area_trabalho" class="large-input focusable-field PagePostProject--selectIE ng-pristine ng-valid ng-touched" ng-model="BudgetSelector.projectData.selectedCurrency" ng-change="BudgetSelector.onCurrencyChange()" ng-options="currency as currency.code for currency in BudgetSelector.currencyData track by currency.id" fl-focus-in-tracker="Project_Currency" fl-focus-out-tracker="Project_Currency" fl-toggle-wizard-next="estimatedBudget" fl-autosave-draft="">

                                    @foreach($area_trabalhos as $area_trabalho)
                                        <option value="{{$area_trabalho->id}}" >{{$area_trabalho->nome}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-step-fieldContainer">
                                <label for="project-budget" class="is-accessibly-hidden" i18n-id="c1c17a072cf7fbf88a4ee948da48c8b0" i18n-msg="Budget Range">Selecione a categoria do seu trabalho</label>
                                <select id="project-currency" name="categoria" class="large-input focusable-field PagePostProject--selectIE ng-pristine ng-valid ng-touched" ng-model="BudgetSelector.projectData.selectedCurrency" ng-change="BudgetSelector.onCurrencyChange()" ng-options="currency as currency.code for currency in BudgetSelector.currencyData track by currency.id" fl-focus-in-tracker="Project_Currency" fl-focus-out-tracker="Project_Currency" fl-toggle-wizard-next="estimatedBudget" fl-autosave-draft="">
                                    @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}" >{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="well" style="overflow: auto">
                            <div class="col-md-4">
                                Date Range Picker
                                <form class="">
                                    <fieldset>
                                        <div class="control-group ">
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                    <input type="text" style="width: 200px" name="validade"  class="form-control" value="01/01/2016 - 01/25/2016" />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>

                        <div class="input__item">
                            <p>Quais as habilidades necessárias?</p>
                            <span>Start with a bit about yourself or your business, and include an overview of what you need done</span>
                            <input type="text">
                            <div class="col-4">
                                <div class="form-step-fieldContainer">
                                    <label for="project-budget" class="is-accessibly-hidden" i18n-id="c1c17a072cf7fbf88a4ee948da48c8b0" i18n-msg="Budget Range">Habilidades</label>
                                    <select id="project-currency" name="skill" class="large-input focusable-field PagePostProject--selectIE ng-pristine ng-valid ng-touched" ng-model="BudgetSelector.projectData.selectedCurrency" ng-change="BudgetSelector.onCurrencyChange()" ng-options="currency as currency.code for currency in BudgetSelector.currencyData track by currency.id" fl-focus-in-tracker="Project_Currency" fl-focus-out-tracker="Project_Currency" fl-toggle-wizard-next="estimatedBudget" fl-autosave-draft="">
                                        @foreach($skills as $skill)
                                            <option value="{{$skill->id}}" >{{$skill->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="input__item">
                            <p>Qual é seu orçamento estimado?<p/>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-step-fieldContainer">
                                        <label for="project-budget" class="is-accessibly-hidden" i18n-id="c1c17a072cf7fbf88a4ee948da48c8b0" i18n-msg="Budget Range">Moeda</label>
                                        <select id="project-currency" name="moeda" class="large-input focusable-field PagePostProject--selectIE ng-pristine ng-valid ng-touched" ng-model="BudgetSelector.projectData.selectedCurrency" ng-change="BudgetSelector.onCurrencyChange()" ng-options="currency as currency.code for currency in BudgetSelector.currencyData track by currency.id" fl-focus-in-tracker="Project_Currency" fl-focus-out-tracker="Project_Currency" fl-toggle-wizard-next="estimatedBudget" fl-autosave-draft="">
                                            @foreach($moedas as $moeda)
                                                <option value="{{$moeda->id}}" >{{$moeda->nome}}</option>
                                                @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-step-fieldContainer">
                                        <label for="project-budget" class="is-accessibly-hidden" i18n-id="c1c17a072cf7fbf88a4ee948da48c8b0" i18n-msg="Budget Range">Intervalo do Orçamento</label>
                                        <select id="project-budget" name="orcamento" class="large-input focusable-field PagePostProject--selectIE ng-pristine ng-untouched ng-valid" ng-model="BudgetSelector.projectData.selectedBudget" ng-options="budget as budget.displayName for budget in BudgetSelector.budgetData track by budget.id" ng-change="BudgetSelector.onBudgetChange()" fl-focus-in-tracker="Project_Budget" fl-focus-out-tracker="Project_Budget" fl-toggle-wizard-next="estimatedBudget" fl-autosave-draft="">
                                            @foreach($orcamentos as $orcamento)
                                            <option value="{{$orcamento->id}}">{{$orcamento->intervalo}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="site-btn">Submit Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection
