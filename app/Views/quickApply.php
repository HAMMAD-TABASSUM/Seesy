<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Apply</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
</head>

<body class="background-gradient text-white">
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
                            <a href="#" class="block hover:bg-violet-500 rounded-3xl text-white whitespace-no-wrap py-2 px-4">
                                Manage My Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <img class="w-4" src="<?php echo base_url('assets/icons/user.svg'); ?>" alt="">
        </div>
    </header>
    <form action="<?= site_url('seesy/apply') ?>" method="POST" enctype="multipart/form-data">
        <div class="px-32 m-auto">
            <h1 class="text-3xl font-bold pt-10 pb-14">Create Your Profile</h1>
            <div class="border-t border-stone-800 pt-7">
                <p class="text-base text-lime-500 pb-12">Email address verified successfully!</p>
                <div>
                    <div class="">
                        <h2 class="text-lg pb-0.5">About you</h2>
                        <h5 class="opacity-50 pb-5">Introduce yourself to employers</h5>
                        <textarea class="outline-none px-6 py-3.5 text-black" name="about" id="" cols="75" rows="5" placeholder="Label"></textarea>
                    </div>
                    <div class="py-9">
                        <h2 class="text-lg pb-0.5">Your avatar</h2>
                        <h5 class="opacity-50">Upload your company logo (PNG, JPG or SVG)</h5>
                        <div class="mt-8">
                            <label for="chooseFile" class="py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300 cursor-pointer px-7">Choose
                                File
                                <input name="avatar" id="chooseFile" type="file" class="hidden">
                            </label>
                        </div>
                    </div>
                    <div class="py-5 border-t border-stone-800">
                        <h2 class="text-lg pb-0.5">Current Job Title</h2>
                        <h5 class="opacity-50 pb-7">Leave blank if you do not have one </h5>
                        <input class="w-96 py-4 px-6 rounded outline-none text-black" type="text" name="currentJobTitle" placeholder="Your current job title">
                    </div>
                    <div class="py-5 border-t border-stone-800">
                        <h2 class="text-lg pb-0.5">Years of Experience</h2>
                        <h5 class="opacity-50 pb-7">How many years of experience do you have in your current role?</h5>
                        <div class="flex gap-x-16">
                            <div class="flex items-center gap-x-3.5">
                                <input type="radio" id="member10" value="less then a year" name="currentExperience">
                                <label for="member10">Less than a year</label>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <input type="radio" id="member20" value="1-5 years" name="currentExperience">
                                <label for="member20">1-5 years</label>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <input type="radio" id="member50" value="5-10 years" name="currentExperience">
                                <label for="member50">5-10 years</label>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <input type="radio" id="member50+" value="10 years +" name="currentExperience">
                                <label for="member50+">10 years +</label>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 border-t border-stone-800">
                        <h2 class="text-lg pb-0.5">Desired Job Title</h2>
                        <h5 class="opacity-50 pb-7">What’s your ideal job?</h5>
                        <input class="w-96 py-4 px-6 rounded outline-none text-black" name="desiredJobTitle" type="text" placeholder="Your desired job title">
                    </div>
                    <div class="py-5 border-t border-stone-800">
                        <h2 class="text-lg pb-0.5">Years of Experience</h2>
                        <h5 class="opacity-50 pb-7">How many years of experience do you have in your desired role?</h5>
                        <div class="flex gap-x-16">
                            <div class="flex items-center gap-x-3.5">
                                <input type="radio" id="none" value="none" name="desiredExperience">
                                <label for="none">None</label>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <input type="radio" id="lessthenYear" value="less then a year" name="desiredExperience">
                                <label for="lessthenYear">Less than a year</label>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <input type="radio" id="years5" value="1-5 years" name="desiredExperience">
                                <label for="years5">1-5 years</label>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <input type="radio" id="years10" value="5-10 years" name="desiredExperience">
                                <label for="years10">5-10 years</label>
                            </div>
                            <div class="flex items-center gap-x-3.5">
                                <input type="radio" id="years10+" value="10years +" name="desiredExperience">
                                <label for="years10+">10 years +</label>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 border-t border-stone-800">
                        <h2 class="text-lg pb-0.5">Salary Expectation</h2>
                        <h5 class="opacity-50 pb-7">What salary are you seeking for this role?</h5>
                        <input class="w-96 py-4 px-6 rounded outline-none text-black" name="SalaryExpectation" type="text" placeholder="£25,000 - £30,000">
                    </div>
                    <div class="flex flex-col gap-y-1 pt-5 border-t border-stone-800">
                        <h2 class="text-lg pb-0.5">Your Skills</h2>
                        <h5 class="opacity-50 pb-7">Add your relevant skills</h5>
                        <div x-data @tags-update="console.log('tags updated', $event.detail.tags)" data-tags='[]' class="">
                            <div x-data="tagSelect()" x-init="init('parentEl')" @click.away="clearSearch()" @keydown.escape="clearSearch()">
                                <div class="w-96" @keydown.enter.prevent="addTag(textInput)">
                                    <input x-model="textInput" name="skills" x-ref="textInput" @input="search($event.target.value)" class="rounded w-96 px-6 py-4 rounded text-black" placeholder="Add">
                                    <!-- selections -->
                                    <template x-for="(tag, index) in tags">
                                        <div class="bg-lime-500 rounded-3xl text-black text-sm rounded mt-4 mr-5 inline-block">
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
                </div>
            </div>
        </div>
        <div class="light-mahroon mt-36 h-36 flex justify-between items-center px-32">
            <div class=" flex gap-x-2 items-center">
                <span class="text-xl">Record or upload an intro video</span>
                <span class="opacity-50">Max file size 3MB</span>
            </div>
            <div class="flex items-center gap-7">
                <button class="border-2 border-violet-700 rounded px-7 py-5">Use your computer camera</button>
                <button class="px-7 py-5 rounded mahroon hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">Upload
                    a video</button>
            </div>
        </div>
    </form>
    <script>
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
    </script>
</body>

</html>