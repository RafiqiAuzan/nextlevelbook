import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link, Head } from '@inertiajs/react';

const Navbar = ({ user }) => {
    return (
        <>
            <Head title="Welcome" />
            <div className="fixed w-full bg-[#91C8E4] backdrop-blur bg-opacity-70 p-4">
                <div className='container mx-auto justify-between flex lg:items-center'>

                    <div className="">
                        <Link href="/">
                            <ApplicationLogo/>
                        </Link>
                    </div>

                    <form>   
                        <div class="relative form-control w-[640px]">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <img src="img/landing/search.png" alt="SVG Image" id="your-svg-image" className=" opacity-60 w-4 h-4 text-gray-500 dark:text-gray-400" />
                            </div>
                            <input type="search" id="default-search" class="ps-10 rounded-full bg-[#F6F4EB] border-[#749BC2] placeholder-[#749BC2] text-[#274f69] focus:border-none md:w-auto" placeholder="Cari Buku" required></input>
                        </div>
                    </form>

                    <div className="dropdown dropdown-end ml-[130px]">
                        <label tabIndex={0} className="btn btn-ghost btn-circle avatar">
                            <div className="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component" src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                        </label>
                        <ul tabIndex={0} className="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                            {user ? <>
                                            <li>
                                                <Link href={route('dashboard')} as="button" className="justify-between">
                                                    Dashboard
                                                    <span className="badge">New</span>
                                                </Link>
                                            </li>
                                            <li><Link>Settings</Link></li>
                                            <li><Link href={route('logout')} method="post" as="button">Logout</Link></li>
                                        </> : <>
                                            <li><Link href={route('login')} as="button">Login</Link></li>
                                            <li><Link href={route('register')} as="button">Register</Link></li>
                                        </>
                            }
                        </ul>
                    </div>
                    
                </div>
            </div>
        </>
    );
}

export default Navbar