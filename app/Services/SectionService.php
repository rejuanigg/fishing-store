<?php
namespace App\Services;

use App\Models\Section;

class SectionService
{
    public function store(array $data): Section
    {
        return Section::create($data);
    }

    public function update(Section $section, array $data): Section
    {
        $section->update($data);
        return $section;
    }

    public function destroy(Section $section): void
    {
        $section->delete();
    }
}
?>
