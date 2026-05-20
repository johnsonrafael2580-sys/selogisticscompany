public function handle($request, Closure $next)
{
    if (auth()->check() && auth()->user()->must_change_password) {
        // Mpeleke kwenye page ya kubadili password ikiwa bado hajaibadili
        if (!$request->is('profile/change-password*')) {
            return redirect()->route('profile.change-password')
                             ->with('info', 'Please change your password first.');
        }
    }
    return $next($request);
}