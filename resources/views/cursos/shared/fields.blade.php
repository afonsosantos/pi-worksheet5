@php
$disabled = $readOnlyData ?? false ? 'disabled' : '';
@endphp

<div class="row mt-4 mb-4">
    <div class="col-md-6 mb-3">
        <div>
            <label for="inputAbr" class="form-label">Abreviatura</label>
            <input type="text" name="abreviatura" id="inputAbr" value="{{ $curso->abreviatura }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div>
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" name="nome" id="inputNome" value="{{ $curso->nome }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div>
            <label for="inputTipo" class="form-label">Tipo de Curso</label>
            <select name="tipo" id="inputTipo" {{ $disabled }} class="form-select">
                <option {{ $curso->tipo == 'Licenciatura' ? 'selected' : '' }}>Licenciatura</option>
                <option {{ $curso->tipo == 'Mestrado' ? 'selected' : '' }}>Mestrado</option>
                <option {{ $curso->tipo == 'Curso Técnico Superior Profissional' ? 'selected' : '' }}>Curso Técnico
                    Superior
                    Profissional</option>
            </select>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div>
            <label for="inputSemestres" class="form-label">Semestres</label>
            <input type="text" name="semestres" id="inputSemestres" value="{{ $curso->semestres }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div>
            <label for="inputECTS" class="form-label">ECTS</label>
            <input type="text" name="ECTS" id="inputECTS" value="{{ $curso->ECTS }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div>
            <label for="inputVagas" class="form-label">Vagas</label>
            <input type="text" name="vagas" id="inputVagas" value="{{ $curso->vagas }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div>
            <label for="inputContato" class="form-label">Contato</label>
            <input type="text" name="contato" id="inputContato" value="{{ $curso->contato }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>

    <div class="col-md-12">
        <div>
            <label for="inputObjetivos" class="form-label">Objetivos</label>
            <textarea name="objetivos" id="inputObjetivos" rows="10" cols="100" {{ $disabled }} class="form-control">
            {{ $curso->objetivos }}
            </textarea>
        </div>

    </div>
</div>
