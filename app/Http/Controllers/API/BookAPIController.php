<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBookAPIRequest;
use App\Http\Requests\API\UpdateBookAPIRequest;
use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class BookController
 * @package App\Http\Controllers\API
 */

class BookAPIController extends AppBaseController
{
    /** @var  BookRepository */
    private $bookRepository;

    public function __construct(BookRepository $bookRepo)
    {
        $this->bookRepository = $bookRepo;
    }

    /**
     * Display a listing of the Book.
     * GET|HEAD /books
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $books = $this->bookRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($books->toArray(), 'Books retrieved successfully');
    }

    /**
     * Store a newly created Book in storage.
     * POST /books
     *
     * @param CreateBookAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateBookAPIRequest $request)
    {
        $input = $request->all();

        $book = $this->bookRepository->create($input);

        return $this->sendResponse($book->toArray(), 'Book saved successfully');
    }

    /**
     * Display the specified Book.
     * GET|HEAD /books/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Book $book */
        $book = $this->bookRepository->find($id);

        if (empty($book)) {
            return $this->sendError('Book not found');
        }

        return $this->sendResponse($book->toArray(), 'Book retrieved successfully');
    }

    /**
     * Update the specified Book in storage.
     * PUT/PATCH /books/{id}
     *
     * @param int $id
     * @param UpdateBookAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookAPIRequest $request)
    {
        $input = $request->all();

        /** @var Book $book */
        $book = $this->bookRepository->find($id);

        if (empty($book)) {
            return $this->sendError('Book not found');
        }

        $book = $this->bookRepository->update($input, $id);

        return $this->sendResponse($book->toArray(), 'Book updated successfully');
    }

    /**
     * Remove the specified Book from storage.
     * DELETE /books/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Book $book */
        $book = $this->bookRepository->find($id);

        if (empty($book)) {
            return $this->sendError('Book not found');
        }

        $book->delete();

        return $this->sendResponse($id, 'Book deleted successfully');
    }
}
