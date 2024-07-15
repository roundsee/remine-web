<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remine Selfie Photo Studio Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-control, .form-select {
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            background-color: #0d6efd;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h1 class="text-center mb-4">Remine Reservation</h1>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="date" class="form-control" id="checkIn" name="checkIn" placeholder="Check-in date" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <select class="form-select" id="timeSlot" name="timeSlot" required>
                            <option value="">Time Slot</option>
                            <option value=1>11:00</option>
                            <option value=2 disabled>11:20</option>
                            <option value=3 disabled>11:40</option>
                            <option value=4>12:00</option>
                            <option value=5>12:20</option>
                            <option value=6>12:40</option>
                            <option value=7>13:00</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h2>Select a Paket</h2>
                        <select id="paketSelect">
                            @foreach ($pakets as $paket)
                                <option value="{{ $paket->id }}">
                                    {{ $paket->paketname }} - ${{ $paket->price }}
                                    @if ($paket->thumbnail)
                                        <img src="{{ asset($paket->thumbnail) }}" alt="{{ $paket->paketname }} Thumbnail" width="50">
                                    @else
                                        <span>No Thumbnail</span>
                                    @endif
                                </option>
                            @endforeach
                        </select>
                                        </div>
                    <div class="col-md-6 mb-3">
                        <input type="number" class="form-control" id="guests" name="guests" placeholder="Number of guests" min="1" required>
                    </div>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="Comments"></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                    <label class="form-check-label" for="terms">I agree to the terms and conditions.</label>
                </div>
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>