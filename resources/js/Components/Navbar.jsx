import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link, Head } from '@inertiajs/react';

const Navbar = ({ user }) => {
    return (
        <>
            <Head title="Welcome" />
            <div className="container mx-auto navbar bg-base-100">
                <div className="shrink-0 flex items-center">
                    <Link href="/">
                        <ApplicationLogo className="block h-9 w-auto fill-current text-yellow-800" />
                    </Link>
                </div>
                <div className="form-control mx-auto">
                    <input type="text" placeholder="Search" className="input input-bordered w-24 md:w-auto" />
                </div>
                <div className="dropdown dropdown-end">
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
        </>
    );
}

export default Navbar