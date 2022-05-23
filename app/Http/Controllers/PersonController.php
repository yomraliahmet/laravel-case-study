<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Exception;
use Illuminate\Support\Facades\Log;

class PersonController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $persons = Person::with('address')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('person.index', compact('persons'));
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * @param PersonRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PersonRequest $request)
    {
        $personFields = $request->only('name', 'birthday', 'gender');
        $addressFields = $request->only('post_code', 'city_name', 'country_name', 'address');

        try {

            $person = Person::create($personFields);
            $person->address()->create($addressFields);

            return redirect()->back()
                ->with('success', 'New Person created successfully.');
        }
        catch (Exception $e) {
            Log::error($e->getMessage());

            return redirect()->back()
                ->with('error', 'A problem occurred during the operation.');
        }
    }

    /**
     * @param Person $person
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Person $person)
    {
        $person->with('address');

        return view('person.show', compact('person'));
    }

    /**
     * @param Person $person
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Person $person)
    {
        $person->with('address');

        return view('person.edit', compact('person'));
    }

    /**
     * @param PersonRequest $request
     * @param Person $person
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PersonRequest $request, Person $person)
    {
        $personFields = $request->only('name', 'birthday', 'gender');
        $addressFields = $request->only('post_code', 'city_name', 'country_name', 'address');

        try {

            $person->update($personFields);
            $person->address()->update($addressFields);

            return redirect()->back()
                ->with('success', 'Person updated successfully.');
        }
        catch (Exception $e) {
            Log::error($e->getMessage());

            return redirect()->back()
                ->with('error', 'A problem occurred during the operation.');
        }
    }

    /**
     * @param Person $person
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route("persons.index")
            ->with('success', 'Person deleted successfully.');
    }
}
