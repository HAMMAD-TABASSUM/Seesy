<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Vecancy</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
</head>

<body class="black text-white">
    <header class="flex justify-between py-6 px-32 m-auto">
        <div>
            <img src="<?php echo base_url('assets/icons/logo.svg'); ?>" alt="">
        </div>
        <nav class="flex gap-x-9">
            <a href="">Item First</a>
            <a href="">Item Two</a>
            <a href="">Item Three</a>
            <a href="">Item Four</a>
            <a href="">Item Five</a>
        </nav>
        <div class="flex gap-x-8">
            <img class="w-4" src="<?php echo base_url('assets/icons/chat.svg'); ?>" alt="">
            <img class="w-4" src="<?php echo base_url('assets/icons/alert.svg'); ?>" alt="">
            <div class="">
                <div x-data="{ open: false }" class="relative">
                    <button x-on:click="open = true" class="flex items-center focus:bg-violet-600 focus:outline-none py-2.5 px-3.5 rounded-t" type="button">
                        <img class="w-4" src="<?php echo base_url('assets/icons/settings.svg'); ?>" alt="">
                    </button>
                    <ul x-show="open" x-on:click.away="open = false" class="bg-violet-600 text-gray-700 rounded shadow-lg absolute py-7 px-2.5 top-8 right-0" style="min-width:15rem">
                        <li>
                            <a href="#" class="block hover:bg-violet-500 rounded-3xl text-white whitespace-no-wrap py-2 px-4">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="manageProfile.php">abc</a>
                            <a href="manageProfile.php" class="block hover:bg-violet-500 rounded-3xl text-white whitespace-no-wrap py-2 px-4">
                                Manage My Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <img class="w-4" src="<?php echo base_url('assets/icons/user.svg'); ?>" alt="">
        </div>
    </header>
    <div class="pt-6 px-32 m-auto ">
        <div class="pb-10 border-b-2 border-stone-800">
            <h2 class="text-xl">Cotswold AUDI</h2>
            <h1 class="text-3xl pt-3">create a vacancy</h1>
        </div>
    </div>
    <form action="<?= site_url('seesy/vacancy') ?>" method="POST" enctype="multipart/form-data">
        <div class=" pt-36 px-32 m-auto flex flex-col gap-y-7">
            <div class="flex flex-col gap-y-1">
                <label for="">Title</label>
                <input class="px-6 py-4 w-96 rounded text-black" name="title" type="text" placeholder="Job Title">
            </div>
            <div class="flex flex-col gap-y-1">
                <label for="">Industry</label>
                <label class="inline-block relative dropdown">

                    <div class="dd-button px-6 pr-64 py-4 bg-white cursor-pointer rounded inline-block text-black">
                        Select Industry
                    </div>

                    <input type="checkbox" class="dd-input" id="test">

                    <ul class="dd-menu absolute top-full rounded mt-0.5 bg-white text-black p-4 w-96">
                        <li>Action</li>
                        <li>Another action</li>
                        <li>Something else here</li>
                    </ul>

                </label>
            </div>
            <div class="flex flex-col gap-y-1">
                <label for="">Location</label>
                <input class="px-6 py-4 w-96 rounded text-black" name="location" type="text" placeholder="Add Location">
            </div>
            <div class="flex flex-col gap-y-1">
                <label for="">Salary Range</label>
                <div class="flex w-96 justify-between" id="salary">
                    <input class="px-6 py-4 w-44 rounded text-black" type="number" name="salaryFrom" placeholder="From">
                    <input class="px-6 py-4 w-44 rounded text-black" type="number" name="salaryTo" placeholder="To">
                </div>
                <div class="flex pt-7 gap-x-7">
                    <div class="flex items-center gap-x-3.5" onclick="show()">
                        <input type="radio" id="membershow" name="salaryFrom">
                        <label for="membershow">Show salary</label>
                    </div>
                    <div class="flex items-center gap-x-3.5" onclick="hide()">
                        <input type="radio" id="memberhide" name="salaryTo">
                        <label for="memberhide">Hide salary</label>
                    </div>
                </div>
            </div>
            <div class="pb-9">
                <h2 class="text-lg pb-0.5">From your device</h2>
                <h5 class="opacity-50">Max file size 3MB</h5>
                <div class="mt-8">
                    <label for="chooseFile" class="py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 cursor-pointer px-7">Choose
                        File
                        <input id="chooseFile" name="companyLogo" type="file" class="hidden">
                    </label>
                </div>
            </div>
            <div class="flex flex-col gap-y-1">
                <label for="">Tags</label>
                <div x-data @tags-update="console.log('tags updated', $event.detail.tags)" data-tags='[]' class="">
                    <div x-data="tagSelect()" x-init="init('parentEl')" @click.away="clearSearch()" @keydown.escape="clearSearch()">
                        <div class="w-96" @keydown.enter.prevent="addTag(textInput)">
                            <input x-model="textInput" x-ref="textInput" @input="search($event.target.value)" class="rounded w-96 px-6 py-4 rounded text-black" placeholder="Add" name="tags">
                            <!-- selections -->
                            <template x-for="(tag, index) in tags">
                                <div class="px-2 green rounded-3xl text-black text-sm rounded mt-4 mr-5 inline-block">
                                    <span class="ml-4 mr-5 leading-relaxed truncate max-w-xs" x-text="tag"></span>
                                    <button @click.prevent="removeTag(index)" class="w-6 h-8 inline-block align-middle text-gray-500 hover:text-gray-600 focus:outline-none">
                                        <svg class="text-black mr-4 w-6 h-6 fill-current mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z" />
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-12">
                <div class=" border-t-2 border-stone-800">
                    <p class="pt-12 pb-3">Benefits of working with us</p>
                    <div class="flex flex-col" x-data="services()">
                        <div class="flex gap-x-5">
                            <input id="benifit" name="benifit" type="text" x-model="newService" class="text-black px-6 py-4 border rounded w-96" placeholder="Type your benefit">
                            <button class="bg-violet-600 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 text-white rounded px-7 py-3.5" @click="addService()" type="button">Save</button>
                        </div>
                        <label for="benifit" class="flex items-center pt-7 pb-7 gap-x-5">
                            <img class="w-7 h-7" src="<?php echo base_url('assets/icons/Union.svg'); ?>" alt="">
                            <span>Add another benefit</span>
                        </label>
                        <div x-show="services.length">
                            <div class="text-xs">
                                <table class="w-3/5">
                                    <tbody>
                                        <template x-for="service in services" :key="service.id">
                                            <tr class="">
                                                <td class="flex">
                                                    <span class="text-base bg-zinc-900 w-full px-7 py-4 rounded mb-5" x-text="service.body"></span>
                                                    <button type="button" class="pl-5 mb-5" @click="deleteService(service.id)">
                                                        <img src="<?php echo base_url('assets/icons/delete.svg'); ?>" alt="">
                                                    </button>
                                                </td>
                                            </tr>
                                        </template>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-12">
                    <div class=" border-t-2 border-stone-800">
                        <p class="pt-12 pb-3">Questions for candidates</p>
                        <div class="flex flex-col" x-data="services()">
                            <div class="flex gap-x-5">
                                <input id="question" type="text" name="question" x-model="newService" class="text-black px-6 py-4 border rounded w-96" placeholder="Type your question">
                                <button type="button" class="bg-violet-600 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 text-white rounded px-7 py-3.5" @click="addService()">Save</button>
                            </div>
                            <label for="question" class="flex items-center pt-7 pb-7 gap-x-5">
                                <img class="w-7 h-7" src=" <?php echo base_url('assets/icons/Union.svg'); ?>" alt="">
                                <span>Add another question</span>
                            </label>
                            <div x-show="services.length">
                                <div class="text-xs">
                                    <table class="w-3/5">
                                        <tbody>
                                            <template x-for="service in services" :key="service.id">
                                                <tr class="">
                                                    <td class="flex">
                                                        <span class="text-base bg-zinc-900 w-full px-7 py-4 rounded mb-5" x-text="service.body"></span>
                                                        <button type="button" class="pl-5 mb-5" @click="deleteService(service.id)">
                                                            <img src="<?php echo base_url('assets/icons/delete.svg'); ?>" alt="">
                                                        </button>
                                                    </td>
                                                </tr>
                                            </template>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-zinc-900 mt-36 h-36 flex justify-between items-center px-32">
            <div class=" flex gap-x-2 items-center">
                <span class="text-xl">Record a video for the role</span>
                <span class="opacity-50">Max file size 3MB</span>
            </div>
            <div class="flex items-center gap-7">
                <button class="border-2 border-violet-700 rounded px-7 py-5">Use your computer camera</button>
                <button class="px-7 py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Continue</button>
            </div>
        </div>
    </form>



    <script>
        // show and hide salary

        function show() {
            var element = document.getElementById("salary");
            element.classList.remove("hidden");
        }

        function hide() {
            var element = document.getElementById("salary");
            element.classList.add("hidden");
        }

        // input tags

        function tagSelect() {
            return {
                open: false,
                textInput: '',
                tags: [],
                init() {
                    this.tags = JSON.parse(this.$el.parentNode.getAttribute('data-tags'));
                },
                addTag(tag) {
                    tag = tag.trim()
                    if (tag != "" && !this.hasTag(tag)) {
                        this.tags.push(tag)
                    }
                    this.clearSearch()
                    this.$refs.textInput.focus()
                    this.fireTagsUpdateEvent()
                },
                fireTagsUpdateEvent() {
                    this.$el.dispatchEvent(new CustomEvent('tags-update', {
                        detail: {
                            tags: this.tags
                        },
                        bubbles: true,
                    }));
                },
                hasTag(tag) {
                    var tag = this.tags.find(e => {
                        return e.toLowerCase() === tag.toLowerCase()
                    })
                    return tag != undefined
                },
                removeTag(index) {
                    this.tags.splice(index, 1)
                    this.fireTagsUpdateEvent()
                },
                search(q) {
                    if (q.includes(",")) {
                        q.split(",").forEach(function(val) {
                            this.addTag(val)
                        }, this)
                    }
                    this.toggleSearch()
                },
                clearSearch() {
                    this.textInput = ''
                    this.toggleSearch()
                },
                toggleSearch() {
                    this.open = this.textInput != ''
                }
            }
        }

        // Dynamically add new rows

        function services() {
            return {
                services: [{
                        id: 1,
                        body: 'abc',
                        completed: false
                    },
                    {
                        id: 2,
                        body: 'def',
                        completed: false
                    }
                ],
                newService: '',
                addService() {
                    if (this.newService.length < 1) return;
                    this.services.push({
                        id: Date.now(),
                        body: this.newService,
                        completed: false
                    });
                    this.newService = '';
                },
                deleteService(serviceId) {
                    let position = this.services.findIndex(el => el.id == serviceId);
                    this.services.splice(position, 1);
                }
            }
        }
    </script>
</body>

</html>