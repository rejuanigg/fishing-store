<?php
    namespace App\Services;

use App\Models\Calification;
use App\Models\User;

    class CalificationService
    {
        public function store(User $user, array $data)
        {
            $existsScore = Calification::where('user_id',$user->id)->where('product_id', $data['product_id'])->exists();

            if ($existsScore)
                {
                    abort(400, 'Ya tienes una calificacion');
                }
            else
                {
                    $data['user_id'] = $user->id;
                    return Calification::create($data);
                }
        }

        public function update(Calification $calification, array $data)
        {
            $calification->update($data);
            return $calification;
        }

        public function destroy(Calification $calification)
        {
            $calification->delete();
        }
    }
?>
