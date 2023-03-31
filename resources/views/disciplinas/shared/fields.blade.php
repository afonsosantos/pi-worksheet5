@php
$disabled = $readOnlyData ?? false ? 'disabled' : '';
@endphp

<div class="row mt-4 mb-4">
    <div class="col-md-6 mb-3">
        <div>
            <label for="inputAbr" class="form-label">Abreviatura</label>
            <input type="text" name="abreviatura" id="inputAbr" value="{{ $disciplina->abreviatura }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div>
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" name="nome" id="inputNome" value="{{ $disciplina->nome }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div>
            <label for="inputAno" class="form-label">Ano</label>
            <input type="text" name="ano" id="inputAno" value="{{ $disciplina->ano }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div>
            <label for="inputSemestre" class="form-label">Semestre</label>
            <input type="text" name="semestre" id="inputSemestre" value="{{ $disciplina->semestre }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div>
            <label for="inputECTS" class="form-label">ECTS</label>
            <input type="text" name="ano" id="inputECTS" value="{{ $disciplina->ECTS }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div>
            <label for="inputHoras" class="form-label">Horas</label>
            <input type="text" name="semestre" id="inputHoras" value="{{ $disciplina->horas }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div>
            <label for="inputOpcional" class="form-label">Opcional?</label>
            <input type="text" name="opcional" id="inputOpcional" value="{{ $disciplina->opcional }}" {{ $disabled }}
                class="form-control">
        </div>
    </div>
</div>
