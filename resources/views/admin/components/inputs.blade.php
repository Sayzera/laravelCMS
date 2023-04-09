@extends('admin.layout')


@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Advanced Inputs</h1><a class="badge bg-primary ms-2"
                href="https://adminkit.io/pricing/" target="_blank">Pro Component <i
                    class="fas fa-fw fa-external-link-alt"></i></a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Choices.js</h5>
                        <h6 class="card-subtitle text-muted">A vanilla, lightweight, configurable select box/text input
                            plugin.</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <select class="form-control choices-single">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>

                        <div>
                            <select class="form-control choices-multiple" multiple>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Flatpickr</h5>
                        <h6 class="card-subtitle text-muted">JavaScript date and time picker.</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <div class="mb-3">
                                    <label class="form-label">Minimum Setup</label>
                                    <input type="text" class="form-control flatpickr-minimum"
                                        placeholder="Select date.." />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">DateTime</label>
                                    <input type="text" class="form-control flatpickr-datetime"
                                        placeholder="Select date.." />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Human-friendly Dates</label>
                                    <input type="text" class="form-control flatpickr-human"
                                        placeholder="Select date.." />
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="mb-3">
                                    <label class="form-label">Selecting multiple dates</label>
                                    <input type="text" class="form-control flatpickr-multiple"
                                        placeholder="Select date.." />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Range Calendar</label>
                                    <input type="text" class="form-control flatpickr-range"
                                        placeholder="Select date.." />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Time Picker</label>
                                    <input type="text" class="form-control flatpickr-time"
                                        placeholder="Select date.." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Input Masks</h5>
                        <h6 class="card-subtitle text-muted">A vanilla javascript library which creates an input mask.
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="dd/mm/yyyy" />
                                    <span class="text-muted">e.g "DD/MM/YYYY"</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="text" class="form-control" data-inputmask-alias="datetime"
                                        data-inputmask-inputformat="mm/dd/yyyy" />
                                    <span class="text-muted">e.g "MM/DD/YYYY"</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Currency</label>
                                    <input type="text" class="form-control"
                                        data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'prefix': '€ ', 'placeholder': '0'" />
                                    <span class="text-muted">e.g "€ 9,95"</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Currency</label>
                                    <input type="text" class="form-control"
                                        data-inputmask="'alias': 'numeric', 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'" />
                                    <span class="text-muted">e.g "$ 9,95"</span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">License Plate</label>
                                    <input type="text" class="form-control" data-inputmask-mask="[9-]AAA-999" />
                                    <span class="text-muted">e.g "9-ABC-123"</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Decimal</label>
                                    <input type="text" class="form-control"
                                        data-inputmask="'alias': 'decimal', 'groupSeparator': ','" />
                                    <span class="text-muted">e.g "123,456,789"</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">IP Address</label>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'ip'" />
                                    <span class="text-muted">e.g "123.123.123.123"</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'email'" />
                                    <span class="text-muted">e.g "support@adminkit.io"</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Choices.js
        new Choices(document.querySelector(".choices-single"));
        new Choices(document.querySelector(".choices-multiple"));
        // Flatpickr
        flatpickr(".flatpickr-minimum");
        flatpickr(".flatpickr-datetime", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        });
        flatpickr(".flatpickr-human", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        });
        flatpickr(".flatpickr-multiple", {
        mode: "multiple",
        dateFormat: "Y-m-d"
        });
        flatpickr(".flatpickr-range", {
        mode: "range",
        dateFormat: "Y-m-d"
        });
        flatpickr(".flatpickr-time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        });
        });
</script>

@endsection