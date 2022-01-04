export function isAuthenticated(state){
    return !!state.user
}

export function isVerifiedemail(state){
    return !!state.user.email_verified_at
}