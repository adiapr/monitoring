<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Monitoring</title>
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  @include('sweetalert::alert')
    <div class="text-white bg-blue-800 p-3">
        <h1 class="text-xl font-bold">Project Monitoring</h1>
    </div>
    <div class="md:container md:mx-auto bg-blue-100 m-3 p-3">
        <div class="flex flex-col">
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
                + Add Project +
            </button>
            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto"> 
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700"> 
                        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Add Project
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div> 
                        <div class="p-6 space-y-6">
                            <form action="/addMonitoring" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-6">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project Name</label>
                                  <input 
                                    type="text" 
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                                    placeholder="Enter project name" 
                                    required 
                                    name="project_name"
                                  >
                                </div>

                                <div class="mb-6">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Client</label>
                                  <input 
                                    type="text" 
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                                    placeholder="Enter client name" 
                                    required 
                                    name="client"
                                  >
                                </div>

                                <div class="mb-6">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Leader Name</label>
                                  <input 
                                    type="text" 
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                                    placeholder="Enter leader name" 
                                    required 
                                    name="leader_name"
                                  >
                                </div>

                                <div class="mb-6">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Leader Email</label>
                                  <input 
                                    type="email" 
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                                    placeholder="Enter leader email" 
                                    required 
                                    name="leader_email"
                                  >
                                </div>

                                <div class="mb-6">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Leader Photo</label>
                                  <input 
                                    type="file" 
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                                    required 
                                    name="photo"
                                    id="file" 
                                    style="display: none;"
                                  >
                                  <button id="pilih" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Pilih file
                                  </button>
                                  <img src="no-image.png" id="gambar">
                                </div>

                                <div class="mb-6">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Start Date</label>
                                  <input 
                                    type="date" 
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  
                                    required 
                                    name="start_date"
                                  >
                                </div>

                                <div class="mb-6">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">End Date</label>
                                  <input 
                                    type="date" 
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  
                                    required 
                                    name="end_date"
                                  >
                                </div>

                                <div class="mb-6">
                                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Progress</label>
                                  <input 
                                    type="number" 
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  
                                    required 
                                    name="progress"
                                  >
                                </div>
                                
                                <div class="flex items-start mb-6">
                                  <div class="flex items-center h-5">
                                    <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                                  </div>
                                  <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data is true </a></label>
                                </div>
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                  Save
                                </button>
                                <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                  Decline
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @if (count($errors) > 0 )
        <br>
        <div class="flex flex-col">
          <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            <ul style="list-style: none">
              @foreach ($errors->all() as $err)
                <li> {{ $err }}</li>  
              @endforeach
            </ul>
          </div>
        </div>
        @endif

        @if (Session::has('pesan'))
        <br>
        <div class="flex flex-col">
          <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            {{ Session::get('pesan') }}
          </div>
        </div>
        @endif

        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="min-w-full">
                                <thead class="bg-white border-b">
                                  <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      #
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      PROJECT NAME
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      CLIENT
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      PROJECT LEADER
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        START DATE
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      END DATE
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        PROGRESS
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        ACTION
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($a as $item)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ ++$no }}
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->project_name }}
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->client }}
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <table>
                                          <tr>
                                            <td rowspan="2"><img class="w-10 h-10 rounded-full shadow-lg" src="img/{{ $item->leader_image }}" alt="x"/></td>
                                            <td>&nbsp; {{ $item->leader_name }}</td>
                                          </tr>
                                          <tr>
                                            <td class="text-gray-500">&nbsp;  {{ $item->leader_email }}</td>
                                          </tr>
                                        </table>
                                        
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->start_date }}
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $item->end_date }}
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-between mb-1">
                                          <span class="text-base font-medium text-blue-700 dark:text-white"></span>
                                          <span class="text-sm font-medium text-blue-700 dark:text-white">{{ $item->progress }}%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                          <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ $item->progress }}%"></div>
                                        </div>
                                      </td>
                                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <form action="/deleteMonitoring/{{ $item->id }}" method="post">
                                          @csrf
                                          <button onclick="return confirm('Yakin ingin dihapus?')" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-1.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                            <i class="fa fa-trash"></i>
                                          </button>
                                          <a type="button" data-modal-toggle="large-modal{{ $item->id }}" class="focus:outline-none text-white bg-blue-800 hover:bg-blue-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-1.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                            <i class="fa fa-pencil"></i>
                                          </a>
                                        </form>
                                        <form action="/updateMonitoring/{{ $item->id }}" enctype="multipart/form-data" method="post">
                                          @csrf
                                        <div id="large-modal{{ $item->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                                          <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                  <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                                                      <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                                          Edit
                                                      </h3>
                                                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="large-modal{{ $item->id }}">
                                                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                                      </button>
                                                  </div>
                                                  <div class="p-6 space-y-6">
                                                    
                                                      <div class="grid grid-rows-4 grid-flow-col gap-4">
                                                        
                                                        <div>
                                                          <div class="mb-6">
                                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project Name</label>
                                                            <input 
                                                              type="text" 
                                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                                                              placeholder="Enter project name" 
                                                              required 
                                                              value="{{ $item->project_name }}"
                                                              name="project_name"
                                                            >
                                                          </div>
                                                        </div>

                                                        <div>
                                                          <div class="mb-6">
                                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Client</label>
                                                            <input 
                                                              type="text" 
                                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                                                              placeholder="Enter client name" 
                                                              required 
                                                              value="{{ $item->client }}"
                                                              name="client"
                                                            >
                                                          </div>
                                                        </div>
                                                        
                                                        <div>
                                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Leader Name</label>
                                                            <input 
                                                              type="text" 
                                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                                                              placeholder="Enter leader name" 
                                                              required 
                                                              value="{{ $item->leader_name }}"
                                                              name="leader_name"
                                                            >
                                                        </div>

                                                        <div>
                                                          <div class="mb-6">
                                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Leader Email</label>
                                                            <input 
                                                              type="email" 
                                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                                                              placeholder="Enter leader email" 
                                                              required 
                                                              value="{{ $item->leader_email }}"
                                                              name="leader_email"
                                                            >
                                                          </div>
                                                        </div>

                                                        <div>
                                                          <div class="mb-6">
                                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Leader Photo</label>
                                                            <input 
                                                              type="file" 
                                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" 
                                                              name="photo"
                                                            >
                                                          </div>
                                                        </div>

                                                        <div>
                                                          <div class="mb-6">
                                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Start Date</label>
                                                            <input 
                                                              type="date" 
                                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  
                                                              required 
                                                              value="{{ $item->start_date }}"
                                                              name="start_date"
                                                            >
                                                          </div>
                                                        </div>

                                                        <div>
                                                          <div class="mb-6">
                                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">End Date</label>
                                                            <input 
                                                              type="date" 
                                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  
                                                              required 
                                                              value="{{ $item->end_date }}"
                                                              name="end_date"
                                                            >
                                                          </div>
                                                        </div>
                                                        <div>
                                                          <div class="mb-6">
                                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Progress</label>
                                                            <input 
                                                              type="number" 
                                                              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  
                                                              required 
                                                              name="progress"
                                                              value="{{ $item->progress }}"
                                                            >
                                                          </div>
                                                        </div>
                                                      </div>
                                                    
                                                  </div>
                                                  <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                                      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Update
                                                      </button>
                                                      <button data-modal-toggle="large-modal{{ $item->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                        </form>
                                      </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>
                              <div>Data Count : {{ $jml }}</div>
                              <div> {{ $a->links() }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="https://kit.fontawesome.com/0c5dde6cec.js" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        var tm_pilih = document.getElementById('pilih');
        var file = document.getElementById('file');
        tm_pilih.addEventListener('click', function () {
            file.click();
        })
        file.addEventListener('change', function () {
            gambar(this);
        })
        function gambar(a) {
            if (a.files && a.files[0]) {     
                 var reader = new FileReader();    
                 reader.onload = function (e) {
                     document.getElementById('gambar').src=e.target.result;
                 }    
                 reader.readAsDataURL(a.files[0]);
            }

        }
    </script>
</body>
</html>