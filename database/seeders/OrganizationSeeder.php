<?php

namespace Database\Seeders;

use App\Models\hrm\Branch;
use App\Models\hrm\Department;
use App\Models\hrm\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            /*
             * 1. Branches
             */
            $branches = [
                [
                    'code' => 'DHK-HO',
                    'name' => 'Main Branch',
                    'is_head_office' => true,
                    'is_active' => true,
                    'sort_order' => 1,
                ],
                [
                    'code' => 'DHK-02',
                    'name' => 'Dhaka Branch',
                    'is_head_office' => false,
                    'is_active' => true,
                    'sort_order' => 2,
                ],
                [
                    'code' => 'CTG-01',
                    'name' => 'Chattogram Branch',
                    'is_head_office' => false,
                    'is_active' => true,
                    'sort_order' => 3,
                ],
                [
                    'code' => 'SYL-01',
                    'name' => 'Sylhet Branch',
                    'is_head_office' => false,
                    'is_active' => true,
                    'sort_order' => 4,
                ],
                [
                    'code' => 'RAJ-01',
                    'name' => 'Rajshahi Branch',
                    'is_head_office' => false,
                    'is_active' => true,
                    'sort_order' => 5,
                ],
            ];

            foreach ($branches as $data) {
                Branch::updateOrCreate(
                    ['code' => $data['code']],
                    $data
                );
            }

            $mainBranch = Branch::where('code', 'DHK-HO')
                ->firstOrFail();

            $dhakaBranch = Branch::where('code', 'DHK-02')
                ->firstOrFail();

            $chattogramBranch = Branch::where('code', 'CTG-01')
                ->firstOrFail();

            $sylhetBranch = Branch::where('code', 'SYL-01')
                ->firstOrFail();

            $rajshahiBranch = Branch::where('code', 'RAJ-01')
                ->firstOrFail();

            /*
             * 2. Departments
             */
            $departments = [
                [
                    'code' => 'HR',
                    'name' => 'Human Resources',
                    'branch_id' => $mainBranch->id,
                    'is_active' => true,
                ],
                [
                    'code' => 'IT',
                    'name' => 'Information Technology',
                    'branch_id' => $mainBranch->id,
                    'is_active' => true,
                ],
                [
                    'code' => 'FIN',
                    'name' => 'Finance & Accounts',
                    'branch_id' => $dhakaBranch->id,
                    'is_active' => true,
                ],
                [
                    'code' => 'MKT',
                    'name' => 'Marketing',
                    'branch_id' => $chattogramBranch->id,
                    'is_active' => true,
                ],
                [
                    'code' => 'OPS',
                    'name' => 'Operations',
                    'branch_id' => $sylhetBranch->id,
                    'is_active' => true,
                ],
            ];

            foreach ($departments as $data) {
                Department::updateOrCreate(
                    [
                        'branch_id' => $data['branch_id'],
                        'code' => $data['code'],
                    ],
                    $data
                );
            }

            /*
             * 3. Designations
             */
            $designations = [
                [
                    'code' => 'CEO',
                    'name' => 'Chief Executive Officer',
                    'is_active' => true,
                ],
                [
                    'code' => 'MGR',
                    'name' => 'Manager',
                    'is_active' => true,
                ],
                [
                    'code' => 'SWE',
                    'name' => 'Software Engineer',
                    'is_active' => true,
                ],
                [
                    'code' => 'ACC',
                    'name' => 'Accountant',
                    'is_active' => true,
                ],
                [
                    'code' => 'HR-EX',
                    'name' => 'HR Executive',
                    'is_active' => true,
                ],
            ];

            foreach ($designations as $data) {
                Designation::updateOrCreate(
                    ['code' => $data['code']],
                    $data
                );
            }
        });
    }
}
